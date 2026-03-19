<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Webhooks;

use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Jobs\ProcessTaskWithAgentJob;
use DevBridge\AgentBoard\Services\Jira\JiraService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

final class WebhookController extends Controller {
    public function jira(Request $request): JsonResponse {
        if (! $this->verifyJiraSignature($request)) {
            Log::warning('[AgentBoard] Invalid JIRA webhook signature.');

            return response()->json(['error' => 'Invalid signature.'], 401);
        }

        $event = $request->input('webhookEvent');
        $issue = $request->input('issue', []);

        Log::info('[AgentBoard] JIRA webhook received', ['event' => $event]);

        if ($event === 'jira:issue_updated' && $this->isNowInProgress($request)) {
            $this->dispatchAgentForJiraIssue($issue);
        }

        if ($event === 'jira:issue_created') {
            $assigneeId = data_get($issue, 'fields.assignee.accountId');
            $configuredId = config('agent-board.providers.jira.user_account_id');

            if ($assigneeId && $assigneeId === $configuredId) {
                $status = data_get($issue, 'fields.status.name', '');

                if (strtolower($status) === 'in progress') {
                    $this->dispatchAgentForJiraIssue($issue);
                }
            }
        }

        return response()->json(['received' => true]);
    }

    public function confluence(Request $request): JsonResponse {
        if (! $this->verifyConfluenceSignature($request)) {
            return response()->json(['error' => 'Invalid signature.'], 401);
        }

        $event = $request->input('event');
        $page = $request->input('page', []);

        Log::info('[AgentBoard] Confluence webhook received', ['event' => $event]);

        if (in_array($event, ['page_updated', 'label_added'], true)) {
            $labels = collect(data_get($page, 'metadata.labels.results', []))
                ->pluck('name')
                ->toArray();

            if (in_array('ai-task', $labels, true) && in_array('in-progress', $labels, true)) {
                Log::info('[AgentBoard] Webhook: Confluence page trigger', ['page_id' => $page['id'] ?? 'unknown']);
            }
        }

        return response()->json(['received' => true]);
    }

    private function isNowInProgress(Request $request): bool {
        $changelog = $request->input('changelog.items', []);
        $statusItem = collect($changelog)->firstWhere('field', 'status');

        return $statusItem
            && strtolower($statusItem['toString'] ?? '') === 'in progress';
    }

    private function dispatchAgentForJiraIssue(array $issue): void {
        try {
            $task = TaskDTO::fromJiraIssue($issue);
            ProcessTaskWithAgentJob::dispatch($task, JiraService::class);
            Log::info('[AgentBoard] Webhook: agent dispatched via JIRA event', ['task' => $task->id]);
        } catch (\Throwable $e) {
            Log::error('[AgentBoard] Webhook: failed to dispatch for JIRA issue', ['error' => $e->getMessage()]);
        }
    }

    private function verifyJiraSignature(Request $request): bool {
        $secret = config('agent-board.webhooks.jira_secret');

        if (! $secret) {
            return true;
        }

        $signature = $request->header('X-Hub-Signature');

        if (! $signature) {
            return false;
        }

        $expected = 'sha256=' . hash_hmac('sha256', $request->getContent(), $secret);

        return hash_equals($expected, $signature);
    }

    private function verifyConfluenceSignature(Request $request): bool {
        $secret = config('agent-board.webhooks.confluence_secret');

        if (! $secret) {
            return true;
        }

        $signature = $request->header('X-Atlassian-Webhook-Signature');

        if (! $signature) {
            return false;
        }

        $expected = 'sha256=' . hash_hmac('sha256', $request->getContent(), $secret);

        return hash_equals($expected, $signature);
    }
}
