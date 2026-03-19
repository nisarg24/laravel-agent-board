<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Exceptions;

final class PmConnectionException extends \RuntimeException {
    public function __construct(
        string $provider,
        string $reason,
        int $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct(
            "Failed to connect to {$provider}: {$reason}",
            $code,
            $previous,
        );
    }
}
