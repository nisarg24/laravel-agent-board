<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Contracts;

interface KanbanProviderInterface {
    public function getBoardColumns(string $boardId): array;

    public function moveCard(string $cardId, string $columnId): bool;

    public function getBoards(string $projectId): array;
}
