<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Events;

use DateTimeImmutable;
use DevBridge\AgentBoard\DTOs\TaskDTO;

final class TaskAgentAssigned {
    public function __construct(
        public readonly TaskDTO $task,
        public readonly string $agentId,
        public readonly DateTimeImmutable $assignedAt = new DateTimeImmutable(),
    ) {}
}
