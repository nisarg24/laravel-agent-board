<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Http\Controllers;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class DashboardController extends Controller {
    public function index(): View {
        return view('agent-board::pages.dashboard', [
            'activeProvider' => config('agent-board.active_provider', 'jira'),
            'providers' => config('agent-board.enabled_providers', ['jira']),
        ]);
    }

    public function projects(string $provider): JsonResponse {
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        return response()->json($pm->getProjects()->map->toArray()->values());
    }

    public function kanban(string $provider, string $projectId): JsonResponse {
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        return response()->json($pm->getKanbanBoard($projectId));
    }

    public function inProgressTasks(string $provider): JsonResponse {
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        return response()->json($pm->getAssignedInProgressTasks()->map->toArray()->values());
    }

    public function moveTask(Request $request, string $provider, string $taskId): JsonResponse {
        $validated = $request->validate(['status' => 'required|string']);
        $pm = $this->resolveProvider($provider);

        if (! $pm->connect()) {
            return response()->json(['error' => 'Could not connect to provider.'], 503);
        }

        $success = $pm->updateTaskStatus($taskId, $validated['status']);

        return response()->json([
            'success' => $success,
            'message' => $success ? 'Task moved.' : 'Failed to move task.',
        ]);
    }

    private function resolveProvider(string $provider): ProjectManagementInterface {
        return app("agent-board.{$provider}");
    }
}
