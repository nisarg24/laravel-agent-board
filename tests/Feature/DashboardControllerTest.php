<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Tests\Feature;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\ProjectDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;
use Mockery;

final class DashboardControllerTest extends PackageTestCase {
    public function test_dashboard_route_returns_200(): void {
        $this->withoutMiddleware();

        $response = $this->get('/agent-board');

        $response->assertStatus(200);
        $response->assertViewIs('agent-board::pages.dashboard');
    }

    public function test_projects_endpoint_returns_json_collection(): void {
        $this->withoutMiddleware();

        $projects = collect([
            new ProjectDTO('1', 'Alpha', 'ALPHA', 'jira'),
            new ProjectDTO('2', 'Beta', 'BETA', 'jira'),
        ]);

        $mockProvider = Mockery::mock(ProjectManagementInterface::class);
        $mockProvider->shouldReceive('connect')->andReturn(true);
        $mockProvider->shouldReceive('getProjects')->andReturn($projects);

        $this->app->bind('agent-board.jira', fn () => $mockProvider);

        $response = $this->getJson('/agent-board/projects/jira');

        $response->assertStatus(200);
        $response->assertJsonCount(2);
        $response->assertJsonFragment(['name' => 'Alpha', 'key' => 'ALPHA']);
    }

    public function test_kanban_endpoint_returns_board_data(): void {
        $this->withoutMiddleware();

        $boardData = [
            'todo' => ['title' => 'To Do', 'tasks' => []],
            'in_progress' => ['title' => 'In Progress', 'tasks' => [
                ['id' => 'T-1', 'title' => 'Build login', 'status' => 'in_progress'],
            ]],
            'done' => ['title' => 'Done', 'tasks' => []],
        ];

        $mockProvider = Mockery::mock(ProjectManagementInterface::class);
        $mockProvider->shouldReceive('connect')->andReturn(true);
        $mockProvider->shouldReceive('getKanbanBoard')->with('PROJ')->andReturn($boardData);

        $this->app->bind('agent-board.jira', fn () => $mockProvider);

        $response = $this->getJson('/agent-board/kanban/jira/PROJ');

        $response->assertStatus(200);
        $response->assertJsonStructure(['todo', 'in_progress', 'done']);
        $response->assertJsonPath('in_progress.tasks.0.id', 'T-1');
    }

    public function test_kanban_returns_503_when_provider_connection_fails(): void {
        $this->withoutMiddleware();

        $mockProvider = Mockery::mock(ProjectManagementInterface::class);
        $mockProvider->shouldReceive('connect')->andReturn(false);

        $this->app->bind('agent-board.jira', fn () => $mockProvider);

        $response = $this->getJson('/agent-board/kanban/jira/PROJ');

        $response->assertStatus(503);
        $response->assertJsonFragment(['error' => 'Could not connect to provider.']);
    }

    public function test_in_progress_tasks_endpoint_returns_task_list(): void {
        $this->withoutMiddleware();

        $tasks = collect([
            new TaskDTO('T-1', 'Fix bug', 'Description', TaskStatus::IN_PROGRESS, TaskPriority::HIGH, 'u1', 'Alice', 'PROJ', 'My Project', 'jira'),
        ]);

        $mockProvider = Mockery::mock(ProjectManagementInterface::class);
        $mockProvider->shouldReceive('connect')->andReturn(true);
        $mockProvider->shouldReceive('getAssignedInProgressTasks')->andReturn($tasks);

        $this->app->bind('agent-board.jira', fn () => $mockProvider);

        $response = $this->getJson('/agent-board/tasks/jira/in-progress');

        $response->assertStatus(200);
        $response->assertJsonCount(1);
        $response->assertJsonPath('0.id', 'T-1');
    }

    public function test_move_task_endpoint_calls_provider(): void {
        $this->withoutMiddleware();

        $mockProvider = Mockery::mock(ProjectManagementInterface::class);
        $mockProvider->shouldReceive('connect')->andReturn(true);
        $mockProvider->shouldReceive('updateTaskStatus')->with('T-1', 'Done')->andReturn(true);

        $this->app->bind('agent-board.jira', fn () => $mockProvider);

        $response = $this->postJson('/agent-board/tasks/jira/T-1/move', ['status' => 'Done']);

        $response->assertStatus(200);
        $response->assertJsonFragment(['success' => true]);
    }

    protected function tearDown(): void {
        Mockery::close();
        parent::tearDown();
    }
}
