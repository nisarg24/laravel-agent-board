<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Http\Controllers;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\Jobs\ProcessTaskWithAgentJob;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

final class AutomationController extends Controller {
    public function __construct(
        private readonly TaskAutomationService $automationService,
    ) {}

    public function dispatch(Request $request): JsonResponse {
        $provider = $request->input('provider', config('agent-board.active_provider', 'jira'));
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        $tasks = $pm->getAssignedInProgressTasks();
        $dispatched = [];

        foreach ($tasks as $task) {
            ProcessTaskWithAgentJob::dispatch($task, get_class($pm));
            $dispatched[] = ['id' => $task->id, 'title' => $task->title];
        }

        return response()->json([
            'success' => true,
            'dispatched' => count($dispatched),
            'tasks' => $dispatched,
            'message' => count($dispatched) . ' task(s) queued for AI processing.',
        ]);
    }

    public function dispatchTask(Request $request, string $provider, string $taskId): JsonResponse {
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        $task = $pm->getAssignedInProgressTasks()->firstWhere('id', $taskId);

        if (! $task) {
            return response()->json(['error' => "Task {$taskId} not found or not assigned to you."], 404);
        }

        ProcessTaskWithAgentJob::dispatch($task, get_class($pm));

        return response()->json([
            'success' => true,
            'task' => $task->toArray(),
            'message' => "Task [{$taskId}] queued for AI processing.",
        ]);
    }

    public function plan(Request $request): JsonResponse {
        $provider = $request->input('provider', config('agent-board.active_provider', 'jira'));
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        $tasks = $pm->getAssignedInProgressTasks();
        $plans = $this->automationService->planTasks($tasks);

        return response()->json($plans->values());
    }

    private function resolveProvider(string $provider): ProjectManagementInterface {
        return app("agent-board.{$provider}");
    }
}
