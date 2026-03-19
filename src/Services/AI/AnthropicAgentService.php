<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI;

use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\Contracts\AiToolInterface;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Exceptions\AiAgentException;
use GuzzleHttp\Client;

final class AnthropicAgentService implements AiAgentInterface {
    private Client $client;

    private string $systemPrompt;

    private array $tools = [];

    private string $model;

    public function __construct(private readonly array $config) {
        $this->model = $config['model'] ?? 'claude-opus-4-6';
        $this->client = new Client([
            'base_uri' => 'https://api.anthropic.com/v1/',
            'headers' => [
                'x-api-key' => $config['api_key'],
                'anthropic-version' => '2023-06-01',
                'content-type' => 'application/json',
            ],
            'timeout' => 120,
        ]);
        $this->systemPrompt = $this->buildDefaultSystemPrompt();
    }

    public function processTask(TaskDTO $task, array $tools = []): AgentResultDTO {
        $allTools = array_merge($this->tools, $tools);
        $messages = [['role' => 'user', 'content' => $this->buildTaskContent($task)]];
        $toolCallLog = [];

        try {
            while (true) {
                $payload = [
                    'model' => $this->model,
                    'max_tokens' => 4096,
                    'system' => $this->systemPrompt,
                    'messages' => $messages,
                ];

                if (! empty($allTools)) {
                    $payload['tools'] = $this->formatToolsForApi($allTools);
                }

                $response = $this->client->post('messages', ['json' => $payload]);
                $data = json_decode((string) $response->getBody(), true);
                $stopReason = $data['stop_reason'];
                $content = $data['content'];

                $messages[] = ['role' => 'assistant', 'content' => $content];

                if ($stopReason === 'end_turn') {
                    $textBlock = collect($content)->firstWhere('type', 'text');
                    $summary = $textBlock['text'] ?? 'Task completed.';
                    $tokens = ($data['usage']['input_tokens'] ?? 0) + ($data['usage']['output_tokens'] ?? 0);

                    return AgentResultDTO::success(
                        taskId: $task->id,
                        summary: $summary,
                        toolCallLog: $toolCallLog,
                        tokensUsed: $tokens,
                    );
                }

                if ($stopReason === 'tool_use') {
                    $toolResults = [];

                    foreach ($content as $block) {
                        if ($block['type'] !== 'tool_use') {
                            continue;
                        }

                        $toolName = $block['name'];
                        $toolInput = $block['input'];
                        $toolUseId = $block['id'];
                        $toolResult = $this->executeTool($toolName, $toolInput);
                        $toolCallLog[] = ['tool' => $toolName, 'input' => $toolInput, 'result' => $toolResult];

                        $toolResults[] = [
                            'type' => 'tool_result',
                            'tool_use_id' => $toolUseId,
                            'content' => json_encode($toolResult),
                        ];
                    }

                    $messages[] = ['role' => 'user', 'content' => $toolResults];
                }

                if (! in_array($stopReason, ['end_turn', 'tool_use'], true)) {
                    break;
                }
            }

            return AgentResultDTO::success($task->id, 'Task processed.', toolCallLog: $toolCallLog);
        } catch (\Throwable $e) {
            return AgentResultDTO::failure($task->id, $e->getMessage());
        }
    }

    public function planTask(TaskDTO $task): array {
        try {
            $response = $this->client->post('messages', [
                'json' => [
                    'model' => $this->model,
                    'max_tokens' => 1024,
                    'system' => $this->systemPrompt,
                    'messages' => [[
                        'role' => 'user',
                        'content' => "Return ONLY a valid JSON object with a 'steps' array. Plan the execution for:\n\nTitle: {$task->title}\nDescription: {$task->description}",
                    ]],
                ],
            ]);

            $data = json_decode((string) $response->getBody(), true);
            $text = collect($data['content'])->firstWhere('type', 'text')['text'] ?? '{}';
            $cleaned = preg_replace('/```json|```/', '', $text) ?? $text;

            /** @var array<string, mixed> $decoded */
            $decoded = json_decode(trim($cleaned), true);

            return is_array($decoded) ? $decoded : [];
        } catch (\Throwable $e) {
            throw new AiAgentException("Failed to plan task: {$e->getMessage()}", previous: $e);
        }
    }

    public function executeTool(string $toolName, array $parameters): mixed {
        if (! isset($this->tools[$toolName])) {
            throw new AiAgentException("Tool '{$toolName}' is not registered.");
        }

        return $this->tools[$toolName]->execute($parameters);
    }

    public function getAgentIdentifier(): string {
        return "anthropic:{$this->model}";
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

    private function buildTaskContent(TaskDTO $task): string {
        return implode("\n\n", [
            "You have been assigned the following task from {$task->provider}:",
            "**Title:** {$task->title}",
            "**Description:** {$task->description}",
            "**Priority:** {$task->priority->value}",
            "**Project:** {$task->projectName}",
            'Please complete this task using available tools. When finished, summarise what was done.',
        ]);
    }

    private function formatToolsForApi(array $tools): array {
        return array_values(array_map(function (AiToolInterface $tool) {
            return [
                'name' => $tool->getName(),
                'description' => $tool->getDescription(),
                'input_schema' => $tool->getSchema(),
            ];
        }, $tools));
    }

    private function buildDefaultSystemPrompt(): string {
        return <<<'PROMPT'
        You are an expert AI software development agent. You are given coding and project tasks from JIRA or Confluence.

        Your responsibilities:
        1. Carefully read and fully understand task requirements
        2. Use available tools to complete the work (read files, write code, run tests)
        3. Apply SOLID principles, clean code practices, and write tests when appropriate
        4. When done, provide a concise summary of what was accomplished
        5. Flag any blocking issues or ambiguities clearly

        Be thorough. Do not report completion until the task is genuinely done.
        PROMPT;
    }
}
