<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Services\Automation;

use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Events\TaskAgentAssigned;
use DevBridge\AgentBoard\Events\TaskAutomationCompleted;
use DevBridge\AgentBoard\Events\TaskAutomationFailed;
use DevBridge\AgentBoard\Monitoring\AgentExecutionLogger;
use DevBridge\AgentBoard\Monitoring\TokenUsageService;
use DevBridge\AgentBoard\Services\AI\AgentFactory;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;

final class TaskAutomationService {
    private AgentFactory $agentFactory;

    private const CONFIDENCE_THRESHOLD = 0.70;

    public function __construct(
        private readonly AiAgentInterface $baseAgent,
        private readonly AgentExecutionLogger $logger,
        private readonly TokenUsageService $tokenUsage,
        private readonly array $config,
    ) {
        $this->agentFactory = new AgentFactory($this->baseAgent, $this->config);
    }

    public function runAutomationCycle(ProjectManagementInterface $provider): array {
        Log::info('[AgentBoard] Starting automation cycle', ['provider' => $provider->getProviderName()]);

        $tasks = $provider->getAssignedInProgressTasks();
        $results = [];
        $succeeded = 0;
        $failed = 0;
        $lowConfidence = 0;

        foreach ($tasks as $task) {
            $result = $this->processTask($task, $provider);
            $results[] = $result;

            if ($result->success) {
                $result->confidenceScore < self::CONFIDENCE_THRESHOLD ? $lowConfidence++ : $succeeded++;
            } else {
                $failed++;
            }
        }

        return [
            'processed' => $tasks->count(),
            'succeeded' => $succeeded,
            'failed' => $failed,
            'low_confidence' => $lowConfidence,
            'results' => $results,
        ];
    }

    public function processTask(TaskDTO $task, ProjectManagementInterface $provider): AgentResultDTO {
        $agent = $this->agentFactory->createForTask($task);
        $agentId = $agent->getAgentIdentifier();
        $taskWithAgent = $task->withAiAgent($agentId);
        $logId = $this->logger->logStart($taskWithAgent, $agentId);

        Event::dispatch(new TaskAgentAssigned($taskWithAgent, $agentId));
        $provider->addComment($task->id, "🤖 AI Agent `{$agentId}` is starting work on this task.");

        $result = $agent->processTask($taskWithAgent);

        $model = $this->config['ai'][$this->config['ai']['driver']]['model'] ?? 'unknown';
        $this->tokenUsage->record($taskWithAgent, $result, $model);

        if ($result->success) {
            $isLowConfidence = $result->confidenceScore < self::CONFIDENCE_THRESHOLD;

            $summary = $isLowConfidence
                ? "⚠️ LOW CONFIDENCE ({$result->confidenceScore}): {$result->summary}"
                : $result->summary;

            if ($isLowConfidence) {
                $provider->addComment(
                    $task->id,
                    "⚠️ Agent completed with low confidence score ({$result->confidenceScore}). Please review carefully.\n\n{$result->summary}"
                );
            }

            $provider->completeTaskByAI($task->id, $summary);
            Event::dispatch(new TaskAutomationCompleted($taskWithAgent, $result));
        } else {
            $provider->addComment(
                $task->id,
                "❌ AI Agent error: {$result->errorMessage}\n\nTask left in progress for manual review."
            );
            Event::dispatch(new TaskAutomationFailed($taskWithAgent, $result));
        }

        $this->logger->logComplete($logId, $result);

        return $result;
    }

    public function planTasks(Collection $tasks): Collection {
        return $tasks->map(function (TaskDTO $task) {
            $agent = $this->agentFactory->createForTask($task);

            return [
                'task' => $task->toArray(),
                'agent' => $agent->getAgentIdentifier(),
                'plan' => $agent->planTask($task),
            ];
        });
    }
}
