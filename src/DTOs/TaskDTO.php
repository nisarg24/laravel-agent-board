<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\DTOs;

use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;

final readonly class TaskDTO {
    public function __construct(
        public string $id,
        public string $title,
        public string $description,
        public TaskStatus $status,
        public TaskPriority $priority,
        public string $assigneeId,
        public string $assigneeName,
        public string $projectId,
        public string $projectName,
        public string $provider,
        public ?string $boardId = null,
        public ?string $parentTaskId = null,
        public array $labels = [],
        public array $attachments = [],
        public array $comments = [],
        public ?string $aiAgentId = null,
        public ?\DateTimeImmutable $dueDate = null,
        public ?\DateTimeImmutable $createdAt = null,
        public array $metadata = [],
    ) {}

    public static function fromJiraIssue(array $issue): self {
        return new self(
            id: $issue['id'],
            title: $issue['fields']['summary'],
            description: $issue['fields']['description']['content'][0]['content'][0]['text'] ?? '',
            status: TaskStatus::fromJira($issue['fields']['status']['name']),
            priority: TaskPriority::fromString($issue['fields']['priority']['name'] ?? 'medium'),
            assigneeId: $issue['fields']['assignee']['accountId'] ?? '',
            assigneeName: $issue['fields']['assignee']['displayName'] ?? 'Unassigned',
            projectId: $issue['fields']['project']['id'],
            projectName: $issue['fields']['project']['name'],
            provider: 'jira',
            labels: $issue['fields']['labels'] ?? [],
            dueDate: isset($issue['fields']['duedate'])
                ? new \DateTimeImmutable($issue['fields']['duedate'])
                : null,
            createdAt: new \DateTimeImmutable($issue['fields']['created']),
            metadata: $issue,
        );
    }

    public function withAiAgent(string $agentId): self {
        return new self(
            id: $this->id,
            title: $this->title,
            description: $this->description,
            status: $this->status,
            priority: $this->priority,
            assigneeId: $this->assigneeId,
            assigneeName: $this->assigneeName,
            projectId: $this->projectId,
            projectName: $this->projectName,
            provider: $this->provider,
            boardId: $this->boardId,
            parentTaskId: $this->parentTaskId,
            labels: $this->labels,
            attachments: $this->attachments,
            comments: $this->comments,
            aiAgentId: $agentId,
            dueDate: $this->dueDate,
            createdAt: $this->createdAt,
            metadata: $this->metadata,
        );
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status->value,
            'priority' => $this->priority->value,
            'assigneeId' => $this->assigneeId,
            'assigneeName' => $this->assigneeName,
            'projectId' => $this->projectId,
            'projectName' => $this->projectName,
            'provider' => $this->provider,
            'aiAgentId' => $this->aiAgentId,
            'dueDate' => $this->dueDate?->format('Y-m-d'),
        ];
    }
}
