<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI\Tools;

use DevBridge\AgentBoard\Contracts\AiToolInterface;

final class ReadFileTool implements AiToolInterface {
    public function __construct(private readonly array $config) {}

    public function getName(): string {
        return 'read_file';
    }

    public function getDescription(): string {
        return 'Read the contents of a file from the project directory.';
    }

    public function getSchema(): array {
        return [
            'type' => 'object',
            'properties' => [
                'path' => ['type' => 'string', 'description' => 'Relative file path from project root.'],
            ],
            'required' => ['path'],
        ];
    }

    public function execute(array $parameters): mixed {
        $basePath = realpath($this->config['workspace_path'] ?? base_path()) . DIRECTORY_SEPARATOR;

        // Detect path traversal using string check BEFORE resolving realpath
        // This catches ../../etc/passwd even when the file doesn't exist
        $normalised = str_replace('\\', '/', $parameters['path']);
        if (str_contains($normalised, '../') || str_starts_with($normalised, '/')) {
            return ['error' => 'Path is outside allowed workspace.'];
        }

        // Now check existence
        $candidatePath = $basePath . $parameters['path'];
        if (! file_exists($candidatePath)) {
            return ['error' => "File not found: {$parameters['path']}"];
        }

        // Final realpath check to catch any remaining traversal edge cases
        $fullPath = realpath($candidatePath);
        if (! $fullPath || ! str_starts_with($fullPath, $basePath)) {
            return ['error' => 'Path is outside allowed workspace.'];
        }

        return ['content' => file_get_contents($fullPath), 'path' => $parameters['path']];
    }
}
