<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI\Tools;

use DevBridge\AgentBoard\Contracts\AiToolInterface;
use DevBridge\AgentBoard\Exceptions\SecurityException;
use DevBridge\AgentBoard\Security\CommandSanitizer;

final class RunShellCommandTool implements AiToolInterface {
    private CommandSanitizer $sanitizer;

    public function __construct(private readonly array $config) {
        $this->sanitizer = new CommandSanitizer();
    }

    public function getName(): string {
        return 'run_shell_command';
    }

    public function getDescription(): string {
        return 'Run a safe shell command (php, composer, npm, git, grep, find). Useful for running tests or checking project state.';
    }

    public function getSchema(): array {
        return [
            'type' => 'object',
            'properties' => [
                'command' => ['type' => 'string', 'description' => 'The shell command to execute.'],
            ],
            'required' => ['command'],
        ];
    }

    public function execute(array $parameters): mixed {
        try {
            $this->sanitizer->validate($parameters['command']);
        } catch (SecurityException $e) {
            return ['error' => $e->getMessage(), 'success' => false];
        }

        $cwd = $this->config['workspace_path'] ?? base_path();
        $output = [];
        $exitCode = 0;

        exec('cd ' . escapeshellarg($cwd) . " && {$parameters['command']} 2>&1", $output, $exitCode);

        return [
            'output' => implode("\n", $output),
            'exit_code' => $exitCode,
            'success' => $exitCode === 0,
        ];
    }
}
