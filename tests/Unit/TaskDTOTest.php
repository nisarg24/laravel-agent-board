<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Tests\Unit;

use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;
use PHPUnit\Framework\TestCase;

final class TaskDTOTest extends TestCase {
    private function makeTask(array $overrides = []): TaskDTO {
        return new TaskDTO(
            id: $overrides['id'] ?? 'PROJ-123',
            title: $overrides['title'] ?? 'Implement login feature',
            description: $overrides['description'] ?? 'Build user authentication.',
            status: $overrides['status'] ?? TaskStatus::IN_PROGRESS,
            priority: $overrides['priority'] ?? TaskPriority::HIGH,
            assigneeId: 'user-abc',
            assigneeName: 'Jane Dev',
            projectId: 'PROJ',
            projectName: 'My Project',
            provider: 'jira',
        );
    }

    public function test_task_dto_is_created_with_correct_values(): void {
        $task = $this->makeTask();

        $this->assertSame('PROJ-123', $task->id);
        $this->assertSame('Implement login feature', $task->title);
        $this->assertSame(TaskStatus::IN_PROGRESS, $task->status);
        $this->assertSame(TaskPriority::HIGH, $task->priority);
        $this->assertNull($task->aiAgentId);
    }

    public function test_with_ai_agent_returns_new_immutable_instance(): void {
        $original = $this->makeTask();
        $updated = $original->withAiAgent('openai:gpt-4o');

        $this->assertNotSame($original, $updated);
        $this->assertNull($original->aiAgentId);
        $this->assertSame('openai:gpt-4o', $updated->aiAgentId);
        $this->assertSame($original->id, $updated->id);
    }

    public function test_to_array_returns_expected_keys(): void {
        $task = $this->makeTask();
        $array = $task->toArray();

        $expected = [
            'id', 'title', 'description', 'status', 'priority',
            'assigneeId', 'assigneeName', 'projectId', 'projectName',
            'provider', 'aiAgentId', 'dueDate',
        ];

        foreach ($expected as $key) {
            $this->assertArrayHasKey($key, $array, "Missing key: {$key}");
        }
    }

    public function test_from_jira_issue_maps_correctly(): void {
        $issue = [
            'id' => '10001',
            'fields' => [
                'summary' => 'Fix null pointer exception',
                'description' => ['content' => [['content' => [['text' => 'Occurs on login.']]]]],
                'status' => ['name' => 'In Progress'],
                'priority' => ['name' => 'High'],
                'assignee' => ['accountId' => 'acc123', 'displayName' => 'Bob Smith'],
                'project' => ['id' => 'PROJ', 'name' => 'Alpha'],
                'labels' => ['bug', 'backend'],
                'duedate' => '2025-06-30',
                'created' => '2025-01-15T10:00:00.000+0000',
            ],
        ];

        $task = TaskDTO::fromJiraIssue($issue);

        $this->assertSame('10001', $task->id);
        $this->assertSame('Fix null pointer exception', $task->title);
        $this->assertSame(TaskStatus::IN_PROGRESS, $task->status);
        $this->assertSame(TaskPriority::HIGH, $task->priority);
        $this->assertSame('jira', $task->provider);
        $this->assertContains('bug', $task->labels);
    }
}

final class AgentResultDTOTest extends TestCase {
    public function test_success_factory_creates_correct_instance(): void {
        $result = AgentResultDTO::success(
            taskId: 'PROJ-1',
            summary: 'Feature implemented successfully.',
            tokensUsed: 1500,
        );

        $this->assertTrue($result->success);
        $this->assertSame('PROJ-1', $result->taskId);
        $this->assertSame(1500, $result->tokensUsed);
        $this->assertNull($result->errorMessage);
    }

    public function test_failure_factory_creates_correct_instance(): void {
        $result = AgentResultDTO::failure('PROJ-2', 'API rate limit exceeded.');

        $this->assertFalse($result->success);
        $this->assertSame('API rate limit exceeded.', $result->errorMessage);
        $this->assertEmpty($result->summary);
    }
}

final class TaskStatusTest extends TestCase {
    /** @dataProvider jiraStatusProvider */
    public function test_from_jira_maps_correctly(string $jiraStatus, TaskStatus $expected): void {
        $this->assertSame($expected, TaskStatus::fromJira($jiraStatus));
    }

    public static function jiraStatusProvider(): array {
        return [
            ['To Do', TaskStatus::TODO],
            ['In Progress', TaskStatus::IN_PROGRESS],
            ['In Review', TaskStatus::IN_REVIEW],
            ['Done', TaskStatus::DONE],
            ['Blocked', TaskStatus::BLOCKED],
            ['unknown-status', TaskStatus::TODO],
        ];
    }

    public function test_status_has_correct_labels(): void {
        $this->assertSame('In Progress', TaskStatus::IN_PROGRESS->label());
        $this->assertSame('AI Completed', TaskStatus::AI_COMPLETED->label());
        $this->assertSame('Developer Review', TaskStatus::DEVELOPER_REVIEW->label());
    }
}
