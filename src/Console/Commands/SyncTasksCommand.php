<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Console\Commands;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use Illuminate\Console\Command;

final class SyncTasksCommand extends Command {
    protected $signature = 'agent-board:sync
                            {--provider=jira : Provider to sync (jira|confluence)}
                            {--project=      : Filter by project ID}
                            {--json          : Output as JSON}';

    protected $description = 'Sync and display tasks from the configured project management tool.';

    public function handle(): int {
        $provider = $this->option('provider');
        $projectId = $this->option('project');
        $asJson = $this->option('json');

        /** @var ProjectManagementInterface $pmProvider */
        $pmProvider = app("agent-board.{$provider}");

        if (! $pmProvider->connect()) {
            $this->error("Failed to connect to {$pmProvider->getProviderName()}.");

            return self::FAILURE;
        }

        $tasks = $pmProvider->getAssignedInProgressTasks();

        if ($projectId) {
            $tasks = $tasks->filter(fn ($t) => $t->projectId === $projectId);
        }

        if ($asJson) {
            $this->line(json_encode($tasks->map->toArray()->values(), JSON_PRETTY_PRINT));

            return self::SUCCESS;
        }

        if ($tasks->isEmpty()) {
            $this->info('No in-progress tasks found.');

            return self::SUCCESS;
        }

        $this->info("📋 In-Progress Tasks ({$pmProvider->getProviderName()}):");
        $this->table(
            ['ID', 'Title', 'Priority', 'Project', 'Due Date'],
            $tasks->map(fn ($t) => [
                $t->id,
                substr($t->title, 0, 55),
                strtoupper($t->priority->value),
                $t->projectName,
                $t->dueDate?->format('Y-m-d') ?? '—',
            ])->toArray(),
        );

        return self::SUCCESS;
    }
}
