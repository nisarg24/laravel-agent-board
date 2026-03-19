<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Jobs;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

final class ProcessTaskWithAgentJob implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $timeout = 600;

    public function __construct(
        private readonly TaskDTO $task,
        private readonly string $providerClass,
    ) {
        $this->onQueue('agent-tasks');
    }

    public function handle(TaskAutomationService $automationService): void {
        Log::info('[AgentBoard] Job: processing task', [
            'task_id' => $this->task->id,
            'title' => $this->task->title,
            'attempt' => $this->attempts(),
        ]);

        /** @var ProjectManagementInterface $provider */
        $provider = app($this->providerClass);
        $provider->connect();

        $result = $automationService->processTask($this->task, $provider);

        if (! $result->success && $this->attempts() >= $this->tries) {
            Log::error('[AgentBoard] Job: task permanently failed after retries', [
                'task_id' => $this->task->id,
                'error' => $result->errorMessage,
            ]);
        }
    }

    public function failed(\Throwable $exception): void {
        Log::error('[AgentBoard] Job: unrecoverable failure', [
            'task_id' => $this->task->id,
            'error' => $exception->getMessage(),
        ]);
    }

    public function backoff(): array {
        return [30, 120, 300];
    }
}
