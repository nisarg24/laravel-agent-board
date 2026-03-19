<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI;

use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Services\AI\Tools\ReadFileTool;
use DevBridge\AgentBoard\Services\AI\Tools\RunShellCommandTool;
use DevBridge\AgentBoard\Services\AI\Tools\SearchCodebaseTool;
use DevBridge\AgentBoard\Services\AI\Tools\WriteFileTool;

final class AgentFactory {
    private array $taskTypeProfiles = [];

    public function __construct(
        private readonly AiAgentInterface $baseAgent,
        private readonly array $config,
    ) {
        $this->registerDefaultProfiles();
    }

    public function createForTask(TaskDTO $task): AiAgentInterface {
        $profile = $this->resolveProfile($task);
        $tools = $this->buildToolsForProfile($profile['tools'] ?? []);
        $systemPrompt = $this->buildSystemPromptForTask($task, $profile);

        return $this->baseAgent
            ->withSystemPrompt($systemPrompt)
            ->withTools($tools);
    }

    public function registerProfile(string $label, array $profile): void {
        $this->taskTypeProfiles[$label] = $profile;
    }

    private function resolveProfile(TaskDTO $task): array {
        foreach ($task->labels as $label) {
            $key = strtolower($label);
            if (isset($this->taskTypeProfiles[$key])) {
                return $this->taskTypeProfiles[$key];
            }
        }

        $text = strtolower($task->title . ' ' . $task->description);

        return match (true) {
            str_contains($text, 'bug') || str_contains($text, 'fix') => $this->taskTypeProfiles['bugfix'],
            str_contains($text, 'test') || str_contains($text, 'spec') => $this->taskTypeProfiles['testing'],
            str_contains($text, 'refactor') => $this->taskTypeProfiles['refactor'],
            str_contains($text, 'document') || str_contains($text, 'docs') => $this->taskTypeProfiles['documentation'],
            default => $this->taskTypeProfiles['general'],
        };
    }

    private function buildToolsForProfile(array $toolNames): array {
        $toolMap = [
            'read_file' => new ReadFileTool($this->config),
            'write_file' => new WriteFileTool($this->config),
            'run_shell_command' => new RunShellCommandTool($this->config),
            'search_codebase' => new SearchCodebaseTool($this->config),
        ];

        $tools = [];
        foreach ($toolNames as $name) {
            if (isset($toolMap[$name])) {
                $tools[] = $toolMap[$name];
            }
        }

        return $tools;
    }

    private function buildSystemPromptForTask(TaskDTO $task, array $profile): string {
        $base = $profile['system_prompt'] ?? $this->getDefaultSystemPrompt();
        $labels = implode(', ', $task->labels);

        return <<<PROMPT
        {$base}

        ## Current Task Context
        - **Provider:** {$task->provider}
        - **Project:** {$task->projectName}
        - **Priority:** {$task->priority->value}
        - **Labels:** {$labels}

        Focus on delivering quality work that will pass a developer code review.
        PROMPT;
    }

    private function registerDefaultProfiles(): void {
        $this->taskTypeProfiles = [
            'general' => [
                'tools' => ['read_file', 'write_file', 'search_codebase'],
                'system_prompt' => $this->getDefaultSystemPrompt(),
            ],
            'bugfix' => [
                'tools' => ['read_file', 'write_file', 'run_shell_command', 'search_codebase'],
                'system_prompt' => 'You are a bug-fixing specialist. Identify root causes, write minimal targeted fixes, and add regression tests.',
            ],
            'testing' => [
                'tools' => ['read_file', 'write_file', 'run_shell_command', 'search_codebase'],
                'system_prompt' => 'You are a testing specialist. Write comprehensive unit, integration, and feature tests. Aim for high coverage and meaningful assertions.',
            ],
            'refactor' => [
                'tools' => ['read_file', 'write_file', 'search_codebase'],
                'system_prompt' => 'You are a refactoring specialist. Apply SOLID principles, design patterns, and clean code practices without changing behaviour.',
            ],
            'documentation' => [
                'tools' => ['read_file', 'write_file', 'search_codebase'],
                'system_prompt' => 'You are a technical writer. Write clear, accurate, and helpful documentation. Include examples and code snippets.',
            ],
        ];
    }

    private function getDefaultSystemPrompt(): string {
        return 'You are an expert software development AI agent. Complete assigned tasks with high quality code, following best practices and the project\'s conventions.';
    }
}
