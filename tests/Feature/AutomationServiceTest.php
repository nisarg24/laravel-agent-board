<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Tests\Feature;

use DevBridge\AgentBoard\AgentBoardServiceProvider;
use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;
use DevBridge\AgentBoard\Monitoring\AgentExecutionLogger;
use DevBridge\AgentBoard\Monitoring\TokenUsageService;
use DevBridge\AgentBoard\Resilience\CircuitBreaker;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use DevBridge\AgentBoard\Services\Jira\JiraService;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Orchestra\Testbench\TestCase;

abstract class PackageTestCase extends TestCase {
    use MockeryPHPUnitIntegration;
    use RefreshDatabase;

    protected function getPackageProviders($app): array {
        return [AgentBoardServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app): void {
        $app['config']->set('agent-board', [
            'active_provider' => 'jira',
            'enabled_providers' => ['jira'],
            'providers' => [
                'jira' => [
                    'base_url' => 'https://test.atlassian.net',
                    'email' => 'test@test.com',
                    'api_token' => 'token',
                    'user_account_id' => 'acc-1',
                ],
                'confluence' => [
                    'base_url' => 'https://test.atlassian.net/wiki',
                    'email' => 'test@test.com',
                    'api_token' => 'token',
                ],
            ],
            'ai' => [
                'driver' => 'openai',
                'openai' => ['api_key' => 'sk-test', 'model' => 'gpt-4o'],
                'anthropic' => ['api_key' => 'sk-ant-test', 'model' => 'claude-opus-4-6'],
                'tools' => [
                    'read_file' => true,
                    'write_file' => true,
                    'search_codebase' => true,
                    'run_shell_command' => false,
                ],
                'confidence_threshold' => 0.70,
                'cost_per_1k_tokens' => 0.01,
            ],
            'workspace_path' => sys_get_temp_dir(),
            'automation' => [
                'auto_assign_agent' => true,
                'max_concurrent_tasks' => 3,
                'task_timeout_seconds' => 600,
                'retry_on_failure' => 3,
                'retry_backoff' => [30, 120, 300],
            ],
            'webhooks' => [
                'jira_secret' => '',
                'confluence_secret' => '',
            ],
            'circuit_breaker' => [
                'failure_threshold' => 5,
                'reset_timeout' => 300,
            ],
            'notifications' => [
                'slack_webhook_url' => '',
                'notify_on_complete' => false,
                'notify_on_failure' => false,
            ],
        ]);
    }
}

// ── JiraService tests ──────────────────────────────────────────────────────

final class JiraServiceTest extends PackageTestCase {
    private function makeJiraService(array $responses): JiraService {
        $mock = new MockHandler($responses);
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $service = new JiraService(
            ['base_url' => 'https://test.atlassian.net', 'email' => 'test@test.com', 'api_token' => 'test-token'],
            app(CircuitBreaker::class),
        );

        $ref = new \ReflectionProperty($service, 'client');
        $ref->setAccessible(true);
        $ref->setValue($service, $client);

        return $service;
    }

    public function test_connect_returns_true_on_200(): void {
        $service = $this->makeJiraService([
            new Response(200, [], json_encode(['accountId' => 'user1', 'emailAddress' => 'test@test.com'])),
        ]);

        $this->assertTrue($service->connect());
    }

    public function test_get_projects_returns_collection_of_project_dtos(): void {
        $projectsPayload = [
            'values' => [
                ['id' => '1', 'name' => 'Alpha', 'key' => 'ALPHA', 'description' => 'First project'],
                ['id' => '2', 'name' => 'Beta', 'key' => 'BETA', 'description' => 'Second project'],
            ],
        ];

        $service = $this->makeJiraService([
            new Response(200, [], json_encode(['accountId' => 'user1'])),
            new Response(200, [], json_encode($projectsPayload)),
        ]);

        $service->connect();
        $projects = $service->getProjects();

        $this->assertInstanceOf(Collection::class, $projects);
        $this->assertCount(2, $projects);
        $this->assertSame('Alpha', $projects->first()->name);
        $this->assertSame('ALPHA', $projects->first()->key);
    }

    public function test_get_assigned_in_progress_tasks_returns_task_dtos(): void {
        $issuesPayload = [
            'issues' => [[
                'id' => 'PROJ-1',
                'fields' => [
                    'summary' => 'Build auth module',
                    'description' => ['content' => [['content' => [['text' => 'Implement OAuth.']]]]],
                    'status' => ['name' => 'In Progress'],
                    'priority' => ['name' => 'High'],
                    'assignee' => ['accountId' => 'u1', 'displayName' => 'Alice'],
                    'project' => ['id' => 'PROJ', 'name' => 'Main Project'],
                    'labels' => ['backend'],
                    'created' => '2025-01-01T00:00:00.000+0000',
                ],
            ]],
        ];

        $service = $this->makeJiraService([
            new Response(200, [], json_encode(['accountId' => 'user1'])),
            new Response(200, [], json_encode($issuesPayload)),
        ]);

        $service->connect();
        $tasks = $service->getAssignedInProgressTasks();

        $this->assertCount(1, $tasks);
        $task = $tasks->first();
        $this->assertInstanceOf(TaskDTO::class, $task);
        $this->assertSame('PROJ-1', $task->id);
        $this->assertSame(TaskStatus::IN_PROGRESS, $task->status);
        $this->assertSame('jira', $task->provider);
    }

    public function test_update_task_status_returns_false_when_transition_not_found(): void {
        $service = $this->makeJiraService([
            new Response(200, [], json_encode(['accountId' => 'u1'])),
            new Response(200, [], json_encode(['transitions' => []])),
        ]);

        $service->connect();
        $result = $service->updateTaskStatus('PROJ-1', 'Done');

        $this->assertFalse($result);
    }

    public function test_complete_task_by_ai_posts_comment_and_transitions(): void {
        $service = $this->makeJiraService([
            new Response(200, [], json_encode(['accountId' => 'u1'])),
            new Response(201, [], '{}'),
            new Response(200, [], json_encode(['transitions' => [['id' => '31', 'name' => 'Developer Review']]])),
            new Response(204, [], ''),
        ]);

        $service->connect();
        $result = $service->completeTaskByAI('PROJ-1', 'Feature implemented with tests.');

        $this->assertTrue($result);
    }
}

// ── TaskAutomationService tests ────────────────────────────────────────────

final class TaskAutomationServiceTest extends PackageTestCase {
    private function makeTask(string $id = 'T-1'): TaskDTO {
        return new TaskDTO(
            id: $id,
            title: 'Test task',
            description: 'Do the thing.',
            status: TaskStatus::IN_PROGRESS,
            priority: TaskPriority::MEDIUM,
            assigneeId: 'user1',
            assigneeName: 'Alice',
            projectId: 'PROJ',
            projectName: 'Test Project',
            provider: 'jira',
        );
    }

    public function test_process_task_calls_agent_and_completes_on_success(): void {
        $task = $this->makeTask();

        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('getAgentIdentifier')->andReturn('openai:gpt-4o');
        $agent->shouldReceive('withSystemPrompt')->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();
        $agent->shouldReceive('processTask')->once()->andReturn(
            AgentResultDTO::success($task->id, 'Completed the feature.')
        );

        $provider = Mockery::mock(ProjectManagementInterface::class);
        $provider->shouldReceive('getProviderName')->andReturn('JIRA');
        $provider->shouldReceive('addComment')->once();
        $provider->shouldReceive('completeTaskByAI')->once()->andReturn(true);

        $service = new TaskAutomationService(
            $agent,
            app(AgentExecutionLogger::class),
            app(TokenUsageService::class),
            config('agent-board'),
        );

        $result = $service->processTask($task, $provider);

        $this->assertTrue($result->success);
        $this->assertSame('Completed the feature.', $result->summary);
    }

    public function test_process_task_adds_error_comment_on_failure(): void {
        $task = $this->makeTask('T-2');

        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('getAgentIdentifier')->andReturn('openai:gpt-4o');
        $agent->shouldReceive('withSystemPrompt')->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();
        $agent->shouldReceive('processTask')->once()->andReturn(
            AgentResultDTO::failure($task->id, 'Context window exceeded.')
        );

        $provider = Mockery::mock(ProjectManagementInterface::class);
        $provider->shouldReceive('getProviderName')->andReturn('JIRA');
        $provider->shouldReceive('addComment')->atLeast()->once();
        $provider->shouldReceive('completeTaskByAI')->never();

        $service = new TaskAutomationService(
            $agent,
            app(AgentExecutionLogger::class),
            app(TokenUsageService::class),
            config('agent-board'),
        );

        $result = $service->processTask($task, $provider);

        $this->assertFalse($result->success);
        $this->assertSame('Context window exceeded.', $result->errorMessage);
    }

    public function test_run_automation_cycle_processes_all_in_progress_tasks(): void {
        $tasks = collect([
            $this->makeTask('T-1'),
            $this->makeTask('T-2'),
            $this->makeTask('T-3'),
        ]);

        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('getAgentIdentifier')->andReturn('openai:gpt-4o');
        $agent->shouldReceive('withSystemPrompt')->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();
        $agent->shouldReceive('processTask')->times(3)->andReturn(
            AgentResultDTO::success('T-1', 'Done.'),
            AgentResultDTO::success('T-2', 'Done.'),
            AgentResultDTO::failure('T-3', 'Failed.'),
        );

        $provider = Mockery::mock(ProjectManagementInterface::class);
        $provider->shouldReceive('getProviderName')->andReturn('JIRA');
        $provider->shouldReceive('getAssignedInProgressTasks')->andReturn($tasks);
        $provider->shouldReceive('addComment')->times(4);
        $provider->shouldReceive('completeTaskByAI')->twice();

        $service = new TaskAutomationService(
            $agent,
            app(AgentExecutionLogger::class),
            app(TokenUsageService::class),
            config('agent-board'),
        );

        $summary = $service->runAutomationCycle($provider);

        $this->assertSame(3, $summary['processed']);
        $this->assertSame(2, $summary['succeeded']);
        $this->assertSame(1, $summary['failed']);
    }

    protected function tearDown(): void {
        Mockery::close();
        parent::tearDown();
    }
}
