<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Events;

use DateTimeImmutable;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;

final class TaskAutomationFailed {
    public function __construct(
        public readonly TaskDTO $task,
        public readonly AgentResultDTO $result,
        public readonly DateTimeImmutable $failedAt = new DateTimeImmutable(),
    ) {}
}
