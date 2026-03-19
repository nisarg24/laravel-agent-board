<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Console\Commands;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Jobs\ProcessTaskWithAgentJob;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use Illuminate\Console\Command;

final class RunAutomationCommand extends Command {
    protected $signature = 'agent-board:automate
                            {--provider=jira : Provider to use (jira|confluence|both)}
                            {--sync          : Run synchronously instead of queuing}
                            {--dry-run       : Show task plan without executing}
                            {--task=         : Process a specific task ID only}';

    protected $description = 'Run the AI automation cycle: assign agents to in-progress tasks and complete them.';

    public function __construct(
        private readonly TaskAutomationService $automationService,
    ) {
        parent::__construct();
    }

    public function handle(): int {
        $provider = $this->option('provider');
        $isSync = $this->option('sync');
        $isDryRun = $this->option('dry-run');
        $specificTask = $this->option('task');

        $this->info('🤖 AgentBoard — Automation Runner');
        $this->info("Provider: {$provider} | Mode: " . ($isDryRun ? 'dry-run' : ($isSync ? 'sync' : 'async')));
        $this->newLine();

        /** @var ProjectManagementInterface $pmProvider */
        $pmProvider = app("agent-board.{$provider}");

        $this->info("Connecting to {$pmProvider->getProviderName()}...");

        if (! $pmProvider->connect()) {
            $this->error("Failed to connect to {$pmProvider->getProviderName()}. Check your credentials.");

            return self::FAILURE;
        }

        $this->info('✅ Connected.');

        $tasks = $pmProvider->getAssignedInProgressTasks();

        if ($specificTask) {
            $tasks = $tasks->filter(fn (TaskDTO $t) => $t->id === $specificTask);
        }

        if ($tasks->isEmpty()) {
            $this->info('No in-progress tasks assigned to you.');

            return self::SUCCESS;
        }

        $this->info("Found {$tasks->count()} task(s) to process:");
        $this->table(
            ['ID', 'Title', 'Priority', 'Project'],
            $tasks->map(fn (TaskDTO $t) => [$t->id, substr($t->title, 0, 60), $t->priority->value, $t->projectName])->toArray(),
        );

        if ($isDryRun) {
            $this->newLine();
            $this->info('📋 Dry-run mode: generating task plans...');
            $plans = $this->automationService->planTasks($tasks);

            foreach ($plans as $plan) {
                $this->line("\n<fg=cyan>Task:</> {$plan['task']['title']}");
                $this->line("<fg=yellow>Agent:</> {$plan['agent']}");
                $this->line('<fg=green>Plan:</>');
                $this->line(json_encode($plan['plan'], JSON_PRETTY_PRINT));
            }

            return self::SUCCESS;
        }

        if (! $this->confirm("Proceed with processing {$tasks->count()} task(s)?", true)) {
            $this->info('Aborted.');

            return self::SUCCESS;
        }

        if ($isSync) {
            $this->info('Running synchronously...');
            $summary = $this->automationService->runAutomationCycle($pmProvider);
            $this->newLine();
            $this->info("✅ Done: {$summary['succeeded']} succeeded, {$summary['failed']} failed, {$summary['low_confidence']} low confidence.");
        } else {
            $this->info("Dispatching async jobs to queue 'agent-tasks'...");
            $providerClass = get_class($pmProvider);

            foreach ($tasks as $task) {
                ProcessTaskWithAgentJob::dispatch($task, $providerClass);
                $this->line("  → Queued: [{$task->id}] {$task->title}");
            }

            $this->info("✅ {$tasks->count()} job(s) dispatched. Run `php artisan queue:work --queue=agent-tasks` to process.");
        }

        return self::SUCCESS;
    }
}
