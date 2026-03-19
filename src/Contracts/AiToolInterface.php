<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Contracts;

interface AiToolInterface {
    public function getName(): string;

    public function getDescription(): string;

    /** @return array<string, mixed> */
    public function getSchema(): array;

    /** @param array<string, mixed> $parameters */
    public function execute(array $parameters): mixed;
}
