<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\Confluence;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\ProjectDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;
use DevBridge\AgentBoard\Exceptions\PmConnectionException;
use DevBridge\AgentBoard\Resilience\CircuitBreaker;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;

final class ConfluenceService implements ProjectManagementInterface {
    private Client $client;

    private bool $connected = false;

    public function __construct(
        private readonly array $config,
        private readonly CircuitBreaker $circuitBreaker,
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($config['base_url'], '/') . '/rest/api/',
            'auth' => [$config['email'], $config['api_token']],
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'timeout' => 30,
        ]);
    }

    public function connect(): bool {
        if ($this->circuitBreaker->isOpen('confluence')) {
            throw new PmConnectionException('Confluence', 'Circuit breaker is open. Too many recent failures.');
        }

        try {
            $response = $this->client->get('user/current');
            $this->connected = $response->getStatusCode() === 200;
            $this->circuitBreaker->recordSuccess('confluence');

            return $this->connected;
        } catch (GuzzleException $e) {
            $this->circuitBreaker->recordFailure('confluence');

            throw new PmConnectionException('Confluence', $e->getMessage(), previous: $e);
        }
    }

    public function getProjects(): Collection {
        $this->ensureConnected();

        try {
            $response = $this->client->get('space', ['query' => ['limit' => 50, 'type' => 'global']]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return collect($data['results'] ?? [])
                ->map(fn (array $space) => new ProjectDTO(
                    id: $space['id'],
                    name: $space['name'],
                    key: $space['key'],
                    provider: 'confluence',
                    description: $space['description']['plain']['value'] ?? null,
                ));
        } catch (GuzzleException $e) {
            throw new PmConnectionException('Confluence', 'Failed to fetch spaces: ' . $e->getMessage());
        }
    }

    public function getAssignedInProgressTasks(): Collection {
        $this->ensureConnected();

        $cql = 'type = page AND label = "ai-task" AND label = "in-progress" ORDER BY lastModified DESC';

        try {
            $response = $this->client->get('content/search', [
                'query' => ['cql' => $cql, 'limit' => 50, 'expand' => 'body.storage,metadata.labels,space'],
            ]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return collect($data['results'] ?? [])->map(fn (array $page) => $this->pageToTask($page));
        } catch (GuzzleException $e) {
            throw new PmConnectionException('Confluence', 'Failed to fetch tasks: ' . $e->getMessage());
        }
    }

    public function updateTaskStatus(string $taskId, string $status): bool {
        $this->ensureConnected();

        $statusLabel = strtolower(str_replace(' ', '-', $status));

        try {
            $this->removeLabelsByPrefix($taskId, 'in-progress', 'ai-completed', 'developer-review', 'done');
            $this->client->post("content/{$taskId}/label", [
                'json' => [['prefix' => 'global', 'name' => $statusLabel]],
            ]);

            return true;
        } catch (GuzzleException) {
            return false;
        }
    }

    public function addComment(string $taskId, string $comment): bool {
        $this->ensureConnected();

        try {
            $this->client->post('content', [
                'json' => [
                    'type' => 'comment',
                    'container' => ['id' => $taskId, 'type' => 'page'],
                    'body' => [
                        'storage' => [
                            'value' => "<p>{$comment}</p>",
                            'representation' => 'storage',
                        ],
                    ],
                ],
            ]);

            return true;
        } catch (GuzzleException) {
            return false;
        }
    }

    public function getKanbanBoard(string $projectId): array {
        $this->ensureConnected();

        $cql = "space.key = \"{$projectId}\" AND label = \"ai-task\" ORDER BY lastModified DESC";

        try {
            $response = $this->client->get('content/search', [
                'query' => ['cql' => $cql, 'limit' => 200, 'expand' => 'metadata.labels,space'],
            ]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);
            $tasks = collect($data['results'] ?? [])->map(fn (array $p) => $this->pageToTask($p));

            return $this->groupTasksIntoColumns($tasks);
        } catch (GuzzleException $e) {
            throw new PmConnectionException('Confluence', 'Failed to fetch board: ' . $e->getMessage());
        }
    }

    public function completeTaskByAI(string $taskId, string $aiSummary): bool {
        $comment = "🤖 **AI Agent Completed**\n\n{$aiSummary}\n\n*Moved to Developer Review.*";
        $this->addComment($taskId, $comment);

        return $this->updateTaskStatus($taskId, 'developer-review');
    }

    public function getProviderName(): string {
        return 'Confluence';
    }

    private function pageToTask(array $page): TaskDTO {
        $labels = collect($page['metadata']['labels']['results'] ?? [])->pluck('name')->toArray();
        $status = $this->detectStatusFromLabels($labels);

        return new TaskDTO(
            id: (string) $page['id'],
            title: $page['title'],
            description: strip_tags($page['body']['storage']['value'] ?? ''),
            status: $status,
            priority: TaskPriority::MEDIUM,
            assigneeId: $page['version']['by']['accountId'] ?? '',
            assigneeName: $page['version']['by']['displayName'] ?? 'Unknown',
            projectId: $page['space']['key'] ?? '',
            projectName: $page['space']['name'] ?? '',
            provider: 'confluence',
            labels: $labels,
            createdAt: new \DateTimeImmutable($page['history']['createdDate'] ?? 'now'),
        );
    }

    private function detectStatusFromLabels(array $labels): TaskStatus {
        return match (true) {
            in_array('in-progress', $labels, true) => TaskStatus::IN_PROGRESS,
            in_array('in-review', $labels, true) => TaskStatus::IN_REVIEW,
            in_array('ai-completed', $labels, true) => TaskStatus::AI_COMPLETED,
            in_array('developer-review', $labels, true) => TaskStatus::DEVELOPER_REVIEW,
            in_array('done', $labels, true) => TaskStatus::DONE,
            default => TaskStatus::TODO,
        };
    }

    private function groupTasksIntoColumns(Collection $tasks): array {
        $columns = [
            TaskStatus::TODO->value => ['title' => 'To Do', 'tasks' => []],
            TaskStatus::IN_PROGRESS->value => ['title' => 'In Progress', 'tasks' => []],
            TaskStatus::IN_REVIEW->value => ['title' => 'In Review', 'tasks' => []],
            TaskStatus::AI_COMPLETED->value => ['title' => 'AI Completed', 'tasks' => []],
            TaskStatus::DEVELOPER_REVIEW->value => ['title' => 'Developer Review', 'tasks' => []],
            TaskStatus::DONE->value => ['title' => 'Done', 'tasks' => []],
        ];

        foreach ($tasks as $task) {
            $key = $task->status->value;
            if (isset($columns[$key])) {
                $columns[$key]['tasks'][] = $task->toArray();
            }
        }

        return $columns;
    }

    private function removeLabelsByPrefix(string $pageId, string ...$labels): void {
        foreach ($labels as $label) {
            try {
                $this->client->delete("content/{$pageId}/label/{$label}");
            } catch (GuzzleException) {
                // Label may not exist — ignore
            }
        }
    }

    private function ensureConnected(): void {
        if (! $this->connected) {
            $this->connect();
        }
    }
}
