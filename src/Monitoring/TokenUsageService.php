<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Monitoring;

use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use Illuminate\Support\Facades\DB;

final class TokenUsageService {
    private const DEFAULT_COSTS = [
        'gpt-4o' => 0.005,
        'gpt-4o-mini' => 0.00015,
        'gpt-4-turbo' => 0.01,
        'claude-opus-4-6' => 0.015,
        'claude-sonnet-4-6' => 0.003,
        'claude-haiku-4-5-20251001' => 0.00025,
    ];

    public function record(TaskDTO $task, AgentResultDTO $result, string $model): void {
        if ($result->tokensUsed === 0) {
            return;
        }

        $costPer1k = self::DEFAULT_COSTS[$model]
            ?? config('agent-board.ai.cost_per_1k_tokens', 0.01);

        $costUsd = ($result->tokensUsed / 1000) * $costPer1k;

        DB::table('agent_board_token_usage')->insert([
            'task_id' => $task->id,
            'project_id' => $task->projectId,
            'provider' => $task->provider,
            'agent_id' => $result->taskId,
            'model' => $model,
            'tokens_used' => $result->tokensUsed,
            'cost_usd' => round($costUsd, 6),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function getMonthlyCost(): float {
        return (float) DB::table('agent_board_token_usage')
            ->whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->sum('cost_usd');
    }

    public function getCostByProject(): array {
        return DB::table('agent_board_token_usage')
            ->whereMonth('created_at', now()->month)
            ->selectRaw('project_id, SUM(tokens_used) as tokens, SUM(cost_usd) as cost')
            ->groupBy('project_id')
            ->orderByDesc('cost')
            ->get()
            ->map(fn ($row) => [
                'project_id' => $row->project_id,
                'tokens' => (int) $row->tokens,
                'cost' => round((float) $row->cost, 4),
            ])
            ->toArray();
    }

    public function getDashboardSummary(): array {
        $monthly = DB::table('agent_board_token_usage')
            ->whereMonth('created_at', now()->month)
            ->selectRaw('SUM(tokens_used) as tokens, SUM(cost_usd) as cost, COUNT(*) as tasks')
            ->first();

        $totalTasks = (int) ($monthly->tasks ?? 0);

        return [
            'monthly_tokens' => (int) ($monthly->tokens ?? 0),
            'monthly_cost_usd' => round((float) ($monthly->cost ?? 0), 4),
            'tasks_this_month' => $totalTasks,
            'cost_per_task' => $totalTasks > 0
                ? round((float) ($monthly->cost ?? 0) / $totalTasks, 4)
                : 0,
            'by_project' => $this->getCostByProject(),
        ];
    }
}
