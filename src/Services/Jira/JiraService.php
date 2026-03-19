<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\Jira;

use DevBridge\AgentBoard\Contracts\KanbanProviderInterface;
use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\ProjectDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskStatus;
use DevBridge\AgentBoard\Exceptions\PmConnectionException;
use DevBridge\AgentBoard\Resilience\CircuitBreaker;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;

final class JiraService implements KanbanProviderInterface, ProjectManagementInterface {
    private Client $client;
    private const ISSUE_FIELDS = 'summary,description,status,priority,assignee,project,labels,duedate,created,comment';

    private bool $connected = false;

    private const STATUS_TO_TRANSITION = [
        'todo'             => 'Backlog',
        'in_progress'      => 'In Progress',
        'in_review'        => 'AI Completed/Developer Review',
        'ai_completed'     => 'AI Completed/Developer Review',
        'developer_review' => 'AI Completed/Developer Review',
        'qa'               => 'QA',
        'done'             => 'Done',
    ];

    public function __construct(
        private readonly array $config,
        private readonly CircuitBreaker $circuitBreaker,
    ) {
        $this->client = new Client([
            'base_uri' => rtrim($config['base_url'], '/') . '/rest/api/3/',
            'auth' => [$config['email'], $config['api_token']],
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'timeout' => 30,
        ]);
    }

    public function connect(): bool {
        if ($this->circuitBreaker->isOpen('jira')) {
            throw new PmConnectionException('JIRA', 'Circuit breaker is open. Too many recent failures.');
        }

        try {
            $response = $this->client->get('myself');
            $this->connected = $response->getStatusCode() === 200;
            $this->circuitBreaker->recordSuccess('jira');

            return $this->connected;
        } catch (GuzzleException $e) {
            $this->circuitBreaker->recordFailure('jira');

            throw new PmConnectionException('JIRA', $e->getMessage(), previous: $e);
        }
    }

    public function getProjects(): Collection {
        $this->ensureConnected();

        try {
            $response = $this->client->get('project/search', ['query' => ['expand' => 'description']]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return collect($data['values'] ?? [])
                ->map(fn (array $p) => ProjectDTO::fromJiraProject($p));
        } catch (GuzzleException $e) {
            throw new PmConnectionException('JIRA', 'Failed to fetch projects: ' . $e->getMessage());
        }
    }

    public function getAssignedInProgressTasks(): Collection {
        $this->ensureConnected();

        $jql = 'assignee = currentUser() AND status = "In Progress" ORDER BY priority DESC';

        try {
            $response = $this->client->get('search/jql', [
                'query' => [
                    'jql' => $jql,
                    'fields' => self::ISSUE_FIELDS,
                ],
            ]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return collect($data['issues'] ?? [])
                ->map(fn (array $issue) => TaskDTO::fromJiraIssue($issue));
        } catch (GuzzleException $e) {
            throw new PmConnectionException('JIRA', 'Failed to fetch tasks: ' . $e->getMessage());
        }
    }

    public function updateTaskStatus(string $taskId, string $status): bool {
        $this->ensureConnected();

        $transitionId = $this->getTransitionId($taskId, $status);

        if ($transitionId === null) {
            return false;
        }

        try {
            $this->client->post("issue/{$taskId}/transitions", [
                'json' => ['transition' => ['id' => $transitionId]],
            ]);

            return true;
        } catch (GuzzleException) {
            return false;
        }
    }

    public function addComment(string $taskId, string $comment): bool {
        $this->ensureConnected();

        try {
            $this->client->post("issue/{$taskId}/comment", [
                'json' => [
                    'body' => [
                        'type' => 'doc',
                        'version' => 1,
                        'content' => [[
                            'type' => 'paragraph',
                            'content' => [['type' => 'text', 'text' => $comment]],
                        ]],
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

        $jql = "project = {$projectId} ORDER BY status ASC, priority DESC";

        try {
            $response = $this->client->get('search/jql', [
                'query' => [
                    'jql' => $jql,
                    'fields' => self::ISSUE_FIELDS,
                    'maxResults' => 200,
                ],
            ]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            $tasks = collect($data['issues'] ?? [])
                ->map(fn (array $i) => TaskDTO::fromJiraIssue($i));

            return $this->groupTasksIntoColumns($tasks);
        } catch (GuzzleException $e) {
            throw new PmConnectionException('JIRA', 'Failed to fetch kanban board: ' . $e->getMessage());
        }
    }

    public function completeTaskByAI(string $taskId, string $aiSummary): bool {
        $comment = "🤖 **AI Agent Completed**\n\n{$aiSummary}\n\n*Task automatically completed by AI agent.*";
        $this->addComment($taskId, $comment);
        return $this->updateTaskStatus($taskId, 'AI Completed/Developer Review'); // ✅ exact Jira name
    }

    public function getProviderName(): string {
        return 'JIRA';
    }

    public function getBoardColumns(string $boardId): array {
        $this->ensureConnected();

        try {
            $response = $this->client->get("board/{$boardId}/configuration");
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return $data['columnConfig']['columns'] ?? [];
        } catch (GuzzleException) {
            return [];
        }
    }

    public function moveCard(string $cardId, string $columnId): bool {
        $transitionName = self::STATUS_TO_TRANSITION[$columnId] ?? $columnId;
        return $this->updateTaskStatus($cardId, $transitionName);
    }

    public function getBoards(string $projectId): array {
        $this->ensureConnected();

        try {
            $response = $this->client->get('board', [
                'query' => ['projectKeyOrId' => $projectId],
            ]);
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            return $data['values'] ?? [];
        } catch (GuzzleException) {
            return [];
        }
    }

    private function getTransitionId(string $taskId, string $targetStatus): ?string {
        try {
            $response = $this->client->get("issue/{$taskId}/transitions");
            /** @var array<string, mixed> $data */
            $data = json_decode((string) $response->getBody(), true);

            $transition = collect($data['transitions'] ?? [])
                ->first(fn (array $t) => strtolower($t['name']) === strtolower($targetStatus));

            return $transition['id'] ?? null;
        } catch (GuzzleException) {
            return null;
        }
    }

    private function groupTasksIntoColumns(Collection $tasks): array {
        $columns = [
            TaskStatus::TODO->value         => ['title' => 'Backlog',                       'tasks' => []],
            TaskStatus::IN_PROGRESS->value  => ['title' => 'In Progress',                   'tasks' => []],
            TaskStatus::AI_COMPLETED->value => ['title' => 'AI Completed/Developer Review', 'tasks' => []],
            TaskStatus::QA->value           => ['title' => 'QA',                            'tasks' => []],
            TaskStatus::DONE->value         => ['title' => 'Done',                          'tasks' => []],
        ];
    
        foreach ($tasks as $task) {
            $key = $task->status->value;
            if (isset($columns[$key])) {
                $columns[$key]['tasks'][] = $task->toArray();
            }
        }
    
        return $columns;
    }

    private function ensureConnected(): void {
        if (! $this->connected) {
            $this->connect();
        }
    }
}
