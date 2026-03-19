<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI;

use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\Contracts\AiToolInterface;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Exceptions\AiAgentException;
use OpenAI;
use OpenAI\Client;

final class OpenAiAgentService implements AiAgentInterface {
    private Client $client;

    private string $systemPrompt;

    private array $tools = [];

    private string $model;

    public function __construct(private readonly array $config) {
        $this->client = OpenAI::client($config['api_key']);
        $this->model = $config['model'] ?? 'gpt-4o';
        $this->systemPrompt = $this->buildDefaultSystemPrompt();
    }

    public function processTask(TaskDTO $task, array $tools = []): AgentResultDTO {
        $allTools = array_merge($this->tools, $tools);
        $messages = $this->buildTaskMessages($task);
        $toolCallLog = [];

        try {
            $response = $this->client->chat()->create([
                'model' => $this->model,
                'messages' => $messages,
                'tools' => $this->formatToolsForApi($allTools),
                'tool_choice' => 'auto',
            ]);

            while ($response->choices[0]->finishReason === 'tool_calls') {
                $toolCalls = $response->choices[0]->message->toolCalls;
                $messages[] = ['role' => 'assistant', 'content' => null, 'tool_calls' => $toolCalls];

                foreach ($toolCalls as $toolCall) {
                    $toolName = $toolCall->function->name;
                    /** @var array<string, mixed> $parameters */
                    $parameters = json_decode($toolCall->function->arguments, true) ?? [];
                    $result = $this->executeTool($toolName, $parameters);

                    $toolCallLog[] = ['tool' => $toolName, 'params' => $parameters, 'result' => $result];

                    $messages[] = [
                        'role' => 'tool',
                        'tool_call_id' => $toolCall->id,
                        'content' => json_encode($result),
                    ];
                }

                $response = $this->client->chat()->create([
                    'model' => $this->model,
                    'messages' => $messages,
                    'tools' => $this->formatToolsForApi($allTools),
                ]);
            }

            $summary = $response->choices[0]->message->content ?? 'Task processed.';
            $tokensUsed = $response->usage->totalTokens ?? 0;

            return AgentResultDTO::success(
                taskId: $task->id,
                summary: $summary,
                toolCallLog: $toolCallLog,
                tokensUsed: $tokensUsed,
            );
        } catch (\Throwable $e) {
            return AgentResultDTO::failure($task->id, $e->getMessage());
        }
    }

    public function planTask(TaskDTO $task): array {
        try {
            $response = $this->client->chat()->create([
                'model' => $this->model,
                'messages' => [
                    ['role' => 'system', 'content' => $this->systemPrompt],
                    ['role' => 'user', 'content' => "Create a step-by-step execution plan for this task as JSON:\n\nTitle: {$task->title}\nDescription: {$task->description}"],
                ],
                'response_format' => ['type' => 'json_object'],
            ]);

            /** @var array<string, mixed> $decoded */
            $decoded = json_decode($response->choices[0]->message->content ?? '{}', true);

            return is_array($decoded) ? $decoded : [];
        } catch (\Throwable $e) {
            throw new AiAgentException("Failed to plan task: {$e->getMessage()}", previous: $e);
        }
    }

    public function executeTool(string $toolName, array $parameters): mixed {
        if (! isset($this->tools[$toolName])) {
            throw new AiAgentException("Tool '{$toolName}' is not registered on this agent.");
        }

        return $this->tools[$toolName]->execute($parameters);
    }

    public function getAgentIdentifier(): string {
        return "openai:{$this->model}";
    }

    public function withSystemPrompt(string $prompt): static {
        $clone = clone $this;
        $clone->systemPrompt = $prompt;

        return $clone;
    }

    public function withTools(array $tools): static {
        $clone = clone $this;
        foreach ($tools as $tool) {
            /** @var AiToolInterface $tool */
            $clone->tools[$tool->getName()] = $tool;
        }

        return $clone;
    }

    private function buildTaskMessages(TaskDTO $task): array {
        return [
            ['role' => 'system', 'content' => $this->systemPrompt],
            ['role' => 'user', 'content' => implode("\n\n", [
                'You are working on the following task:',
                "**Title:** {$task->title}",
                "**Description:** {$task->description}",
                "**Priority:** {$task->priority->value}",
                "**Project:** {$task->projectName}",
                '',
                'Please complete this task. Use the available tools as needed. When done, provide a clear summary of what was accomplished.',
            ])],
        ];
    }

    private function formatToolsForApi(array $tools): array {
        return array_values(array_map(function (AiToolInterface $tool) {
            return [
                'type' => 'function',
                'function' => [
                    'name' => $tool->getName(),
                    'description' => $tool->getDescription(),
                    'parameters' => $tool->getSchema(),
                ],
            ];
        }, $tools));
    }

    private function buildDefaultSystemPrompt(): string {
        return <<<'PROMPT'
        You are an expert AI software development agent. You are given tasks from a project management system (JIRA or Confluence).

        Your responsibilities:
        1. Carefully read and understand the task requirements
        2. Use available tools to complete the task (read files, write code, run tests, etc.)
        3. Follow best practices: clean code, SOLID principles, appropriate tests
        4. Provide a clear, concise summary of what you accomplished
        5. Note any important decisions, assumptions, or blockers encountered

        Always be thorough but focused. Complete tasks fully before reporting done.
        PROMPT;
    }
}
