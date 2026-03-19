<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Contracts;

use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;

interface AiAgentInterface {
    public function processTask(TaskDTO $task, array $tools = []): AgentResultDTO;

    public function planTask(TaskDTO $task): array;

    /** @param array<string, mixed> $parameters */
    public function executeTool(string $toolName, array $parameters): mixed;

    public function getAgentIdentifier(): string;

    public function withSystemPrompt(string $prompt): static;

    /** @param array<string, AiToolInterface> $tools */
    public function withTools(array $tools): static;
}
