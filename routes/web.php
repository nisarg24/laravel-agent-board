<?php

declare(strict_types=1);

use DevBridge\AgentBoard\Http\Controllers\AutomationController;
use DevBridge\AgentBoard\Http\Controllers\DashboardController;
use DevBridge\AgentBoard\Http\Controllers\MonitoringController;
use DevBridge\AgentBoard\Http\Controllers\SettingsController;
use DevBridge\AgentBoard\Webhooks\WebhookController;
use Illuminate\Support\Facades\Route;

$middleware = config('agent-board.middleware', ['web', 'auth']);
$prefix = config('agent-board.route_prefix', 'agent-board');

// ── Webhook routes (no auth — HMAC signature verified) ─────────────────────
Route::prefix($prefix . '/webhook')
    ->name('agent-board.webhook.')
    ->group(function () {
        Route::post('/jira', [WebhookController::class, 'jira'])->name('jira');
        Route::post('/confluence', [WebhookController::class, 'confluence'])->name('confluence');
    });

// ── Authenticated web routes ───────────────────────────────────────────────
Route::prefix($prefix)
    ->middleware($middleware)
    ->name('agent-board.')
    ->group(function () {

        // Dashboard & board
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/projects/{provider}', [DashboardController::class, 'projects'])->name('projects');
        Route::get('/kanban/{provider}/{projectId}', [DashboardController::class, 'kanban'])->name('kanban');
        Route::get('/tasks/{provider}/in-progress', [DashboardController::class, 'inProgressTasks'])->name('tasks.in-progress');
        Route::post('/tasks/{provider}/{taskId}/move', [DashboardController::class, 'moveTask'])->name('tasks.move');

        // Settings
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::post('/settings/test/{provider}', [SettingsController::class, 'testConnection'])->name('settings.test');

        // Automation — rate limited to prevent API credit exhaustion
        Route::middleware(['throttle:20,1'])->group(function () {
            Route::post('/automate', [AutomationController::class, 'dispatch'])->name('automate');
            Route::post('/automate/plan', [AutomationController::class, 'plan'])->name('automate.plan');
            Route::post('/automate/{provider}/{taskId}', [AutomationController::class, 'dispatchTask'])->name('automate.task');
        });

        // Monitoring
        Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring');
        Route::get('/monitoring/stats', [MonitoringController::class, 'stats'])->name('monitoring.stats');
        Route::get('/monitoring/costs', [MonitoringController::class, 'costs'])->name('monitoring.costs');
        Route::get('/monitoring/circuit-breaker', [MonitoringController::class, 'circuitBreaker'])->name('monitoring.circuit');
        Route::post('/monitoring/circuit-breaker/{service}/reset', [MonitoringController::class, 'resetCircuit'])->name('monitoring.circuit.reset');
    });
