<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Contracts;

use DevBridge\AgentBoard\DTOs\ProjectDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use Illuminate\Support\Collection;

interface ProjectManagementInterface {
    public function connect(): bool;

    /** @return Collection<int, ProjectDTO> */
    public function getProjects(): Collection;

    /** @return Collection<int, TaskDTO> */
    public function getAssignedInProgressTasks(): Collection;

    public function updateTaskStatus(string $taskId, string $status): bool;

    public function addComment(string $taskId, string $comment): bool;

    public function getKanbanBoard(string $projectId): array;

    public function completeTaskByAI(string $taskId, string $aiSummary): bool;

    public function getProviderName(): string;
}
