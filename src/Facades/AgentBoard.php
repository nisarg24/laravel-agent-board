<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Facades;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\DTOs\AgentResultDTO;
use DevBridge\AgentBoard\DTOs\TaskDTO;
use DevBridge\AgentBoard\Services\Automation\TaskAutomationService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array runAutomationCycle(ProjectManagementInterface $provider)
 * @method static AgentResultDTO processTask(TaskDTO $task, ProjectManagementInterface $provider)
 * @method static Collection planTasks(Collection $tasks)
 *
 * @see TaskAutomationService
 */
final class AgentBoard extends Facade {
    protected static function getFacadeAccessor(): string {
        return TaskAutomationService::class;
    }
}
