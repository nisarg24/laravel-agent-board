<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Active Provider
    |--------------------------------------------------------------------------
    */
    'active_provider' => env('AGENT_BOARD_PROVIDER', 'jira'),

    'enabled_providers' => explode(',', env('AGENT_BOARD_ENABLED', 'jira')),

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    */
    'route_prefix' => env('AGENT_BOARD_ROUTE_PREFIX', 'agent-board'),

    'middleware' => ['web', 'auth'],

    'api_middleware' => ['api', 'auth:sanctum'],

    /*
    |--------------------------------------------------------------------------
    | Provider Credentials
    |--------------------------------------------------------------------------
    */
    'providers' => [
        'jira' => [
            'base_url' => env('JIRA_BASE_URL', ''),
            'email' => env('JIRA_EMAIL', ''),
            'api_token' => env('JIRA_API_TOKEN', ''),
            'user_account_id' => env('JIRA_ACCOUNT_ID', ''), // used for webhook auto-trigger
        ],
        'confluence' => [
            'base_url' => env('CONFLUENCE_BASE_URL', ''),
            'email' => env('CONFLUENCE_EMAIL', ''),
            'api_token' => env('CONFLUENCE_API_TOKEN', ''),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | AI Configuration
    |--------------------------------------------------------------------------
    */
    'ai' => [
        'driver' => env('AGENT_BOARD_AI_DRIVER', 'openai'),

        'openai' => [
            'api_key' => env('OPENAI_API_KEY', ''),
            'model' => env('AGENT_BOARD_OPENAI_MODEL', 'gpt-4o'),
        ],

        'anthropic' => [
            'api_key' => env('ANTHROPIC_API_KEY', ''),
            'model' => env('AGENT_BOARD_ANTHROPIC_MODEL', 'claude-opus-4-6'),
        ],

        'tools' => [
            'read_file' => env('AGENT_BOARD_TOOL_READ_FILE', true),
            'write_file' => env('AGENT_BOARD_TOOL_WRITE_FILE', true),
            'run_shell_command' => env('AGENT_BOARD_TOOL_SHELL', false),
            'search_codebase' => env('AGENT_BOARD_TOOL_SEARCH', true),
        ],

        /*
        | Minimum confidence score (0.0–1.0) for auto-completion.
        | Tasks below this score are flagged for human review.
        */
        'confidence_threshold' => env('AGENT_BOARD_CONFIDENCE_THRESHOLD', 0.70),

        /*
        | Cost per 1,000 tokens (USD) — used when model is not in the built-in table.
        */
        'cost_per_1k_tokens' => env('AGENT_BOARD_COST_PER_1K', 0.01),
    ],

    /*
    |--------------------------------------------------------------------------
    | Workspace
    |--------------------------------------------------------------------------
    */
    'workspace_path' => env('AGENT_BOARD_WORKSPACE', base_path()),

    /*
    |--------------------------------------------------------------------------
    | Queue
    |--------------------------------------------------------------------------
    */
    'queue' => [
        'connection' => env('AGENT_BOARD_QUEUE_CONNECTION', 'default'),
        'name' => env('AGENT_BOARD_QUEUE_NAME', 'agent-tasks'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Automation
    |--------------------------------------------------------------------------
    */
    'automation' => [
        'auto_assign_agent' => env('AGENT_BOARD_AUTO_ASSIGN', true),
        'max_concurrent_tasks' => (int) env('AGENT_BOARD_MAX_CONCURRENT', 3),
        'task_timeout_seconds' => (int) env('AGENT_BOARD_TASK_TIMEOUT', 600),
        'retry_on_failure' => (int) env('AGENT_BOARD_RETRY', 3),
        'retry_backoff' => [30, 120, 300], // seconds: 30s, 2min, 5min
    ],

    /*
    |--------------------------------------------------------------------------
    | Webhooks
    |--------------------------------------------------------------------------
    | Set secrets to verify that webhook payloads are genuinely from Atlassian.
    */
    'webhooks' => [
        'jira_secret' => env('AGENT_BOARD_JIRA_WEBHOOK_SECRET', ''),
        'confluence_secret' => env('AGENT_BOARD_CONFLUENCE_WEBHOOK_SECRET', ''),
    ],

    /*
    |--------------------------------------------------------------------------
    | Circuit Breaker
    |--------------------------------------------------------------------------
    */
    'circuit_breaker' => [
        'failure_threshold' => (int) env('AGENT_BOARD_CB_THRESHOLD', 5),
        'reset_timeout' => (int) env('AGENT_BOARD_CB_RESET', 300),
    ],

    /*
    |--------------------------------------------------------------------------
    | Status Mappings
    |--------------------------------------------------------------------------
    */
    'status_mappings' => [
        'jira' => [
            'todo' => env('JIRA_STATUS_TODO', 'To Do'),
            'in_progress' => env('JIRA_STATUS_IN_PROGRESS', 'In Progress'),
            'ai_completed' => env('JIRA_STATUS_AI_DONE', 'AI Completed'),
            'developer_review' => env('JIRA_STATUS_REVIEW', 'Developer Review'),
            'done' => env('JIRA_STATUS_DONE', 'Done'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications (optional)
    |--------------------------------------------------------------------------
    */
    'notifications' => [
        'slack_webhook_url' => env('AGENT_BOARD_SLACK_WEBHOOK', ''),
        'notify_on_complete' => env('AGENT_BOARD_NOTIFY_COMPLETE', false),
        'notify_on_failure' => env('AGENT_BOARD_NOTIFY_FAILURE', true),
    ],

];
