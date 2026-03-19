<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\DTOs;

final readonly class ProjectDTO {
    public function __construct(
        public string $id,
        public string $name,
        public string $key,
        public string $provider,
        public ?string $description = null,
        public ?string $avatarUrl = null,
        public array $metadata = [],
    ) {}

    public static function fromJiraProject(array $project): self {
        return new self(
            id: $project['id'],
            name: $project['name'],
            key: $project['key'],
            provider: 'jira',
            description: $project['description'] ?? null,
            avatarUrl: $project['avatarUrls']['48x48'] ?? null,
            metadata: $project,
        );
    }

    public function toArray(): array {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'key' => $this->key,
            'provider' => $this->provider,
            'description' => $this->description,
            'avatarUrl' => $this->avatarUrl,
        ];
    }
}
