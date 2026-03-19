<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Monitoring;

use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

final class AgentExecutionLogger {
    public function logStart(TaskDTO $task, string $agentId): int {
        $id = DB::table('agent_board_agent_logs')->insertGetId([
            'task_id' => $task->id,
            'task_title' => $task->title,
            'provider' => $task->provider,
            'project_id' => $task->projectId,
            'agent_id' => $agentId,
            'status' => 'running',
            'started_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Log::info('[AgentBoard] Agent started', [
            'log_id' => $id,
            'task_id' => $task->id,
            'agent' => $agentId,
        ]);

        return $id;
    }

    public function logComplete(int $logId, AgentResultDTO $result): void {
        DB::table('agent_board_agent_logs')
            ->where('id', $logId)
            ->update([
                'status'           => $result->success ? 'completed' : 'failed',
                'summary'          => $result->summary,
                'error_message'    => $result->errorMessage,
                'tool_call_log'    => json_encode($result->toolCallLog),
                'tokens_used'      => $result->tokensUsed,
                'confidence_score' => $result->confidenceScore,
                'completed_at'     => now(),
                'updated_at'       => now(),
            ]);
    
        // ✅ Log the error message so you can actually see what went wrong
        if ($result->success) {
            Log::info('[AgentBoard] Agent finished', [
                'log_id' => $logId,
                'success' => true,
                'tokens'  => $result->tokensUsed,
                'confidence' => $result->confidenceScore,
            ]);
        } else {
            Log::error('[AgentBoard] Agent failed', [
                'log_id' => $logId,
                'success' => false,
                'error'   => $result->errorMessage, // ✅ now visible in logs
                'tokens'  => $result->tokensUsed,
            ]);
        }
    }

    public function getRecentRuns(int $limit = 20): array {
        return DB::table('agent_board_agent_logs')
            ->orderByDesc('created_at')
            ->limit($limit)
            ->get()
            ->toArray();
    }

    public function getStats(string $period = 'month'): array {
        $since = match ($period) {
            'today' => now()->startOfDay(),
            'week' => now()->startOfWeek(),
            'month' => now()->startOfMonth(),
            default => now()->startOfMonth(),
        };

        $rows = DB::table('agent_board_agent_logs')
            ->where('created_at', '>=', $since)
            ->selectRaw('
                COUNT(*) as total,
                SUM(CASE WHEN status = "completed" THEN 1 ELSE 0 END) as succeeded,
                SUM(CASE WHEN status = "failed" THEN 1 ELSE 0 END) as failed,
                SUM(tokens_used) as total_tokens,
                AVG(confidence_score) as avg_confidence
            ')
            ->first();

        return [
            'total' => (int) ($rows->total ?? 0),
            'succeeded' => (int) ($rows->succeeded ?? 0),
            'failed' => (int) ($rows->failed ?? 0),
            'total_tokens' => (int) ($rows->total_tokens ?? 0),
            'avg_confidence' => round((float) ($rows->avg_confidence ?? 0), 2),
        ];
    }
}
