<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Tests\Unit;

use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Enums\TaskPriority;
use DevBridge\AgentBoard\Enums\TaskStatus;
use DevBridge\AgentBoard\Services\AI\AgentFactory;
use Mockery;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

final class AgentFactoryTest extends TestCase {
    use MockeryPHPUnitIntegration;

    private function makeTask(array $overrides = []): TaskDTO {
        return new TaskDTO(
            id: $overrides['id'] ?? 'T-1',
            title: $overrides['title'] ?? 'General task',
            description: $overrides['description'] ?? 'Do stuff.',
            status: TaskStatus::IN_PROGRESS,
            priority: TaskPriority::MEDIUM,
            assigneeId: 'u1',
            assigneeName: 'Dev',
            projectId: 'PROJ',
            projectName: 'Test',
            provider: 'jira',
            labels: $overrides['labels'] ?? [],
        );
    }

    private function makeBaseAgent(): AiAgentInterface {
        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('withSystemPrompt')->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();
        $agent->shouldReceive('getAgentIdentifier')->andReturn('openai:gpt-4o');

        return $agent;
    }

    private function config(): array {
        return ['workspace_path' => sys_get_temp_dir(), 'ai' => ['tools' => []]];
    }

    public function test_creates_agent_for_general_task(): void {
        $agent = $this->makeBaseAgent();
        $factory = new AgentFactory($agent, $this->config());
        $task = $this->makeTask();

        $result = $factory->createForTask($task);

        $this->assertInstanceOf(AiAgentInterface::class, $result);
    }

    public function test_detects_bugfix_profile_from_title(): void {
        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('withSystemPrompt')
            ->once()
            ->withArgs(fn (string $p) => str_contains(strtolower($p), 'bug'))
            ->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();

        $factory = new AgentFactory($agent, $this->config());
        $task = $this->makeTask(['title' => 'Fix null pointer bug in login']);

        $result = $factory->createForTask($task);

        $this->assertInstanceOf(AiAgentInterface::class, $result);
    }

    public function test_detects_testing_profile_from_title(): void {
        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('withSystemPrompt')
            ->once()
            ->withArgs(fn (string $p) => str_contains(strtolower($p), 'test'))
            ->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();

        $factory = new AgentFactory($agent, $this->config());
        $task = $this->makeTask(['title' => 'Write unit tests for UserService']);

        $result = $factory->createForTask($task);

        $this->assertInstanceOf(AiAgentInterface::class, $result);
    }

    public function test_label_overrides_keyword_detection(): void {
        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('withSystemPrompt')
            ->once()
            ->withArgs(fn (string $p) => str_contains(strtolower($p), 'document'))
            ->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();

        $factory = new AgentFactory($agent, $this->config());
        $task = $this->makeTask(['title' => 'Fix bug in docs', 'labels' => ['documentation']]);

        $result = $factory->createForTask($task);

        $this->assertInstanceOf(AiAgentInterface::class, $result);
    }

    public function test_register_profile_adds_custom_profile(): void {
        $agent = Mockery::mock(AiAgentInterface::class);
        $agent->shouldReceive('withSystemPrompt')
            ->once()
            ->withArgs(fn (string $p) => str_contains($p, 'security expert'))
            ->andReturnSelf();
        $agent->shouldReceive('withTools')->andReturnSelf();

        $factory = new AgentFactory($agent, $this->config());
        $factory->registerProfile('security', [
            'tools' => ['read_file', 'search_codebase'],
            'system_prompt' => 'You are a security expert. Review code for vulnerabilities.',
        ]);

        $task = $this->makeTask(['labels' => ['security']]);
        $result = $factory->createForTask($task);

        $this->assertInstanceOf(AiAgentInterface::class, $result);
    }

    protected function tearDown(): void {
        Mockery::close();
        parent::tearDown();
    }
}
