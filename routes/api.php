<?php

declare(strict_types=1);

use DevBridge\AgentBoard\Http\Controllers\AutomationController;
use DevBridge\AgentBoard\Http\Controllers\DashboardController;
use DevBridge\AgentBoard\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;

$apiMiddleware = config('agent-board.api_middleware', ['api', 'auth:sanctum']);
$prefix = 'api/' . config('agent-board.route_prefix', 'agent-board');

Route::prefix($prefix)
    ->middleware($apiMiddleware)
    ->name('api.agent-board.')
    ->group(function () {

        Route::get('/projects/{provider}', [DashboardController::class, 'projects']);
        Route::get('/kanban/{provider}/{projectId}', [DashboardController::class, 'kanban']);
        Route::get('/tasks/{provider}/in-progress', [DashboardController::class, 'inProgressTasks']);
        Route::post('/tasks/{provider}/{taskId}/move', [DashboardController::class, 'moveTask']);

        Route::middleware(['throttle:20,1'])->group(function () {
            Route::post('/automate', [AutomationController::class, 'dispatch']);
            Route::post('/automate/plan', [AutomationController::class, 'plan']);
            Route::post('/automate/{provider}/{taskId}', [AutomationController::class, 'dispatchTask']);
        });

        Route::get('/monitoring/stats', [MonitoringController::class, 'stats']);
        Route::get('/monitoring/costs', [MonitoringController::class, 'costs']);
        Route::get('/monitoring/circuit-breaker', [MonitoringController::class, 'circuitBreaker']);
    });
