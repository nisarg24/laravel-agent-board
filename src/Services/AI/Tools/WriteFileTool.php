<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\AI\Tools;

use DevBridge\AgentBoard\Contracts\AiToolInterface;

final class WriteFileTool implements AiToolInterface {
    public function __construct(private readonly array $config) {}

    public function getName(): string {
        return 'write_file';
    }

    public function getDescription(): string {
        return 'Write content to a file. Creates the file if it does not exist.';
    }

    public function getSchema(): array {
        return [
            'type' => 'object',
            'properties' => [
                'path' => ['type' => 'string', 'description' => 'Relative file path from project root.'],
                'content' => ['type' => 'string', 'description' => 'Content to write to the file.'],
            ],
            'required' => ['path', 'content'],
        ];
    }

    public function execute(array $parameters): mixed {
        $basePath = $this->config['workspace_path'] ?? base_path();
        $fullPath = $basePath . DIRECTORY_SEPARATOR . ltrim($parameters['path'], '/');

        $dir = dirname($fullPath);
        if (! is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        file_put_contents($fullPath, $parameters['content']);

        return ['success' => true, 'path' => $parameters['path'], 'bytes' => strlen($parameters['content'])];
    }
}
