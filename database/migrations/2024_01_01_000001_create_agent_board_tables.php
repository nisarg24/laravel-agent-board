<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void {
        // ── agent_board_connections ────────────────────────────────────────
        Schema::create('agent_board_connections', function (Blueprint $table): void {
            $table->id();
            $table->string('provider')->unique();       // jira | confluence
            $table->string('base_url');
            $table->string('email');
            $table->text('api_token_encrypted');        // Encrypted at rest via Laravel Crypt
            $table->boolean('is_active')->default(false);
            $table->timestamp('last_connected_at')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();
        });

        // ── agent_board_agent_logs ─────────────────────────────────────────
        Schema::create('agent_board_agent_logs', function (Blueprint $table): void {
            $table->id();
            $table->string('task_id');
            $table->string('task_title');
            $table->string('provider');
            $table->string('project_id');
            $table->string('agent_id');
            $table->enum('status', ['pending', 'running', 'completed', 'failed']);
            $table->text('summary')->nullable();
            $table->text('error_message')->nullable();
            $table->json('tool_call_log')->nullable();
            $table->json('artifacts')->nullable();
            $table->unsignedInteger('tokens_used')->default(0);
            $table->float('confidence_score')->default(1.0);
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();

            $table->index(['task_id', 'provider']);
            $table->index(['status', 'created_at']);
            $table->index('project_id');
        });

        // ── agent_board_token_usage ────────────────────────────────────────
        Schema::create('agent_board_token_usage', function (Blueprint $table): void {
            $table->id();
            $table->string('task_id');
            $table->string('project_id');
            $table->string('provider');
            $table->string('agent_id');
            $table->string('model');
            $table->unsignedInteger('tokens_used')->default(0);
            $table->decimal('cost_usd', 10, 6)->default(0);
            $table->timestamps();

            $table->index(['project_id', 'created_at']);
            $table->index('created_at');
        });
    }

    public function down(): void {
        Schema::dropIfExists('agent_board_token_usage');
        Schema::dropIfExists('agent_board_agent_logs');
        Schema::dropIfExists('agent_board_connections');
    }
};
