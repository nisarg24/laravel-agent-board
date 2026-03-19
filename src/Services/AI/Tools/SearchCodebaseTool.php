<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI\Tools;

use DevBridge\AgentBoard\Contracts\AiToolInterface;

final class SearchCodebaseTool implements AiToolInterface {
    public function __construct(private readonly array $config) {}

    public function getName(): string {
        return 'search_codebase';
    }

    public function getDescription(): string {
        return 'Search the project codebase for a pattern, class name, function, or any text string.';
    }

    public function getSchema(): array {
        return [
            'type' => 'object',
            'properties' => [
                'pattern' => ['type' => 'string', 'description' => 'Search pattern (grep-compatible regex or plain string).'],
                'directory' => ['type' => 'string', 'description' => 'Directory to search in (default: src/).'],
            ],
            'required' => ['pattern'],
        ];
    }

    public function execute(array $parameters): mixed {
        $pattern = escapeshellarg($parameters['pattern']);
        $directory = escapeshellarg($parameters['directory'] ?? 'src/');
        $cwd = $this->config['workspace_path'] ?? base_path();

        $output = [];
        exec('cd ' . escapeshellarg($cwd) . " && grep -rn {$pattern} {$directory} --include='*.php' 2>&1", $output);

        return [
            'matches' => $output,
            'count' => count($output),
        ];
    }
}
