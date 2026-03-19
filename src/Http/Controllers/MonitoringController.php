<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Http\Controllers;

use DevBridge\AgentBoard\Monitoring\AgentExecutionLogger;
use DevBridge\AgentBoard\Monitoring\TokenUsageService;
use DevBridge\AgentBoard\Resilience\CircuitBreaker;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class MonitoringController extends Controller {
    public function __construct(
        private readonly AgentExecutionLogger $logger,
        private readonly TokenUsageService $tokenUsage,
        private readonly CircuitBreaker $circuitBreaker,
    ) {}

    public function index(): View {
        return view('agent-board::pages.monitoring', [
            'stats' => $this->logger->getStats('month'),
            'costSummary' => $this->tokenUsage->getDashboardSummary(),
            'recentRuns' => $this->logger->getRecentRuns(15),
            'circuitStatus' => $this->circuitBreaker->getStatus(['jira', 'confluence', 'openai', 'anthropic']),
        ]);
    }

    public function stats(Request $request): JsonResponse {
        $period = $request->input('period', 'month');

        return response()->json([
            'stats' => $this->logger->getStats($period),
            'recent_runs' => $this->logger->getRecentRuns(20),
        ]);
    }

    public function costs(): JsonResponse {
        return response()->json($this->tokenUsage->getDashboardSummary());
    }

    public function circuitBreaker(): JsonResponse {
        return response()->json(
            $this->circuitBreaker->getStatus(['jira', 'confluence', 'openai', 'anthropic'])
        );
    }

    public function resetCircuit(string $service): JsonResponse {
        $allowed = ['jira', 'confluence', 'openai', 'anthropic'];

        if (! in_array($service, $allowed, true)) {
            return response()->json(['error' => "Unknown service: {$service}"], 422);
        }

        $this->circuitBreaker->reset($service);

        return response()->json([
            'success' => true,
            'message' => "Circuit reset for service: {$service}",
        ]);
    }
}
