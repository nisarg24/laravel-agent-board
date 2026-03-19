<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard;

use DevBridge\AgentBoard\Console\Commands\RunAutomationCommand;
use DevBridge\AgentBoard\Console\Commands\SyncTasksCommand;
use DevBridge\AgentBoard\Contracts\AiAgentInterface;
use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\Monitoring\AgentExecutionLogger;
use DevBridge\AgentBoard\Monitoring\TokenUsageService;
use DevBridge\AgentBoard\Resilience\CircuitBreaker;
use DevBridge\AgentBoard\Security\ConnectionRepository;
use DevBridge\AgentBoard\Services\AI\AnthropicAgentService;
use DevBridge\AgentBoard\Services\AI\OpenAiAgentService;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use DevBridge\AgentBoard\Services\Confluence\ConfluenceService;
use DevBridge\AgentBoard\Services\Jira\JiraService;
use Illuminate\Support\ServiceProvider;

final class AgentBoardServiceProvider extends ServiceProvider {
    public function register(): void {
        $this->mergeConfigFrom(__DIR__ . '/../config/agent-board.php', 'agent-board');

        $this->registerCoreBindings();
        $this->registerProviderBindings();
        $this->registerAgentBindings();
        $this->registerMonitoringBindings();
        $this->registerSecurityBindings();
    }

    public function boot(): void {
        $this->validateConfiguration();
        $this->publishConfig();
        $this->publishMigrations();
        $this->publishViews();
        $this->publishAssets();
        $this->loadViews();
        $this->loadMigrations();
        $this->loadRoutes();
        $this->registerCommands();
    }

    private function registerCoreBindings(): void {
        $this->app->singleton(TaskAutomationService::class, function ($app) {
            return new TaskAutomationService(
                $app->make(AiAgentInterface::class),
                $app->make(AgentExecutionLogger::class),
                $app->make(TokenUsageService::class),
                $app['config']->get('agent-board'),
            );
        });
    }

    private function registerProviderBindings(): void {
        $this->app->bind('agent-board.jira', function ($app) {
            return new JiraService(
                $app['config']->get('agent-board.providers.jira'),
                $app->make(CircuitBreaker::class),
            );
        });

        $this->app->bind('agent-board.confluence', function ($app) {
            return new ConfluenceService(
                $app['config']->get('agent-board.providers.confluence'),
                $app->make(CircuitBreaker::class),
            );
        });

        $this->app->bind(ProjectManagementInterface::class, function ($app) {
            $provider = $app['config']->get('agent-board.active_provider', 'jira');

            return match ($provider) {
                'jira' => $app->make('agent-board.jira'),
                'confluence' => $app->make('agent-board.confluence'),
                default => throw new \InvalidArgumentException("Unknown PM provider: {$provider}"),
            };
        });
    }

    private function registerAgentBindings(): void {
        $this->app->bind(AiAgentInterface::class, function ($app) {
            $driver = $app['config']->get('agent-board.ai.driver', 'openai');

            return match ($driver) {
                'openai' => new OpenAiAgentService($app['config']->get('agent-board.ai.openai')),
                'anthropic' => new AnthropicAgentService($app['config']->get('agent-board.ai.anthropic')),
                default => throw new \InvalidArgumentException("Unknown AI driver: {$driver}"),
            };
        });
    }

    private function registerMonitoringBindings(): void {
        $this->app->singleton(AgentExecutionLogger::class);
        $this->app->singleton(TokenUsageService::class);
    }

    private function registerSecurityBindings(): void {
        $this->app->singleton(ConnectionRepository::class);
        $this->app->singleton(CircuitBreaker::class);
    }

    private function validateConfiguration(): void {
        if (! $this->app->runningInConsole() && ! $this->app->runningUnitTests()) {
            $driver = config('agent-board.ai.driver');

            if ($driver === 'openai' && empty(config('agent-board.ai.openai.api_key'))) {
                throw new \RuntimeException(
                    '[AgentBoard] OpenAI API key is missing. Set OPENAI_API_KEY in your .env file.'
                );
            }

            if ($driver === 'anthropic' && empty(config('agent-board.ai.anthropic.api_key'))) {
                throw new \RuntimeException(
                    '[AgentBoard] Anthropic API key is missing. Set ANTHROPIC_API_KEY in your .env file.'
                );
            }
        }
    }

    private function publishConfig(): void {
        $this->publishes([
            __DIR__ . '/../config/agent-board.php' => config_path('agent-board.php'),
        ], 'agent-board-config');
    }

    private function publishMigrations(): void {
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations'),
        ], 'agent-board-migrations');
    }

    private function publishViews(): void {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/agent-board'),
        ], 'agent-board-views');
    }

    private function publishAssets(): void {
        $this->publishes([
            __DIR__ . '/../resources/js' => resource_path('js/vendor/agent-board'),
            __DIR__ . '/../resources/css' => resource_path('css/vendor/agent-board'),
        ], 'agent-board-assets');
    }

    private function loadViews(): void {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'agent-board');
    }

    private function loadMigrations(): void {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    private function loadRoutes(): void {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }

    private function registerCommands(): void {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RunAutomationCommand::class,
                SyncTasksCommand::class,
            ]);
        }
    }
}
