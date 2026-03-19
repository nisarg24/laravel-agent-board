<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\DTOs;

final readonly class AgentResultDTO {
    public function __construct(
        public string $taskId,
        public bool $success,
        public string $summary,
        public array $artifacts = [],
        public array $toolCallLog = [],
        public ?string $errorMessage = null,
        public float $confidenceScore = 1.0,
        public int $tokensUsed = 0,
    ) {}

    public static function success(
        string $taskId,
        string $summary,
        array $artifacts = [],
        array $toolCallLog = [],
        int $tokensUsed = 0,
    ): self {
        return new self(
            taskId: $taskId,
            success: true,
            summary: $summary,
            artifacts: $artifacts,
            toolCallLog: $toolCallLog,
            tokensUsed: $tokensUsed,
        );
    }

    public static function failure(string $taskId, string $error): self {
        return new self(
            taskId: $taskId,
            success: false,
            summary: '',
            errorMessage: $error,
        );
    }
}
