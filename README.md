# 🤖 nisarg24/laravel-agent-board

[![Tests](https://github.com/nisarg24/laravel-agent-board/actions/workflows/tests.yml/badge.svg)](https://github.com/nisarg24/laravel-agent-board/actions)

[![PHP Version](https://img.shields.io/badge/PHP-8.3%2B-blue)](https://php.net)
[![Laravel](https://img.shields.io/badge/Laravel-13-red)](https://laravel.com)

A production-ready Laravel 13 package that connects **JIRA** and **Confluence** to an **AI agent system**, automating task completion and displaying a live Kanban dashboard directly inside your Laravel application.

When a task is assigned to you and moved to **In Progress**, an AI agent is automatically dispatched, completes the work using configurable tools (read/write files, search codebase, run shell commands), and transitions the task to **Developer Review** — all with a full audit trail, cost tracking, and circuit-breaker resilience.

---

## ✨ Features

| Feature | Details |
|---|---|
| **Kanban Dashboard** | Live board with drag-and-drop card movement, auto-refresh every 30s |
| **JIRA Integration** | Full REST API v3 — projects, boards, issues, transitions, comments |
| **Confluence Integration** | Space/page-based task tracking via CQL and labels |
| **Per-task AI Agents** | Each task gets a specialised agent (bugfix, testing, refactor, docs, general) |
| **OpenAI + Anthropic** | Plug-and-play driver system — swap models in `.env` |
| **Agentic Tool Loop** | Agents call tools (read/write files, grep, shell) in a loop until done |
| **Confidence Scoring** | Tasks below 0.70 confidence are flagged for human review, not auto-completed |
| **Token Cost Tracking** | Per-task and per-project USD cost tracking with dashboard |
| **Circuit Breaker** | Stops hammering APIs when they're down (CLOSED → OPEN → HALF-OPEN) |
| **Webhook Support** | Real-time triggers from JIRA/Confluence push events with HMAC verification |
| **Encrypted Credentials** | API tokens stored encrypted at rest via Laravel `Crypt` |
| **Rate Limiting** | Automation endpoints throttled to prevent AI credit exhaustion |
| **Async Queue Jobs** | One job per task with exponential backoff retries |
| **Full Audit Trail** | Every agent run logged to DB with tokens, confidence, tool call history |
| **SOLID Architecture** | Interfaces for every boundary, strict types, no concrete coupling |
| **Test Suite** | Unit + Feature tests with Mockery, GuzzleHttp mocks, Orchestra Testbench 10 |
| **CI Pipeline** | GitHub Actions across PHP 8.3, 8.4, 8.5 × Laravel 13 |

---

## 📋 Requirements

| Requirement | Version |
|---|---|
| **PHP** | 8.3 or higher (8.5 recommended) |
| **Laravel** | 13.x |
| **Orchestra Testbench** | 10.x (dev) |
| **PHPUnit** | 12.x (dev) |
| **OpenAI or Anthropic** | API key required |
| **JIRA or Confluence** | Account with API token |
| **Queue worker** | Required for async task processing |

> **Note:** Laravel 13 was released March 17, 2026 and requires PHP 8.3+. PHP 8.5 is fully supported.

---

## 🚀 Installation

### 1. Install via Composer

```bash
composer require nisarg24/laravel-agent-board
```

### 2. Publish config and run migrations

```bash
php artisan vendor:publish --tag=agent-board-config
php artisan vendor:publish --tag=agent-board-migrations
php artisan migrate
```

### 3. Add environment variables

```dotenv
# ── Provider ──────────────────────────────────────────────────────────
AGENT_BOARD_PROVIDER=jira
AGENT_BOARD_ENABLED=jira,confluence

# ── JIRA ──────────────────────────────────────────────────────────────
JIRA_BASE_URL=https://yourorg.atlassian.net
JIRA_EMAIL=you@company.com
JIRA_API_TOKEN=your-token-here
JIRA_ACCOUNT_ID=your-account-id

# ── Confluence ────────────────────────────────────────────────────────
CONFLUENCE_BASE_URL=https://yourorg.atlassian.net/wiki
CONFLUENCE_EMAIL=you@company.com
CONFLUENCE_API_TOKEN=your-token-here

# ── AI Engine ─────────────────────────────────────────────────────────
AGENT_BOARD_AI_DRIVER=openai
OPENAI_API_KEY=sk-...
AGENT_BOARD_OPENAI_MODEL=gpt-4o

# OR Anthropic Claude
ANTHROPIC_API_KEY=sk-ant-...
AGENT_BOARD_ANTHROPIC_MODEL=claude-opus-4-6

# ── Queue ─────────────────────────────────────────────────────────────
QUEUE_CONNECTION=database
AGENT_BOARD_QUEUE_NAME=agent-tasks

# ── Workspace ─────────────────────────────────────────────────────────
AGENT_BOARD_WORKSPACE=C:/laragon/www/my-project
```

### 4. Start the queue worker

```bash
php artisan queue:work --queue=agent-tasks
```

### 5. Visit the dashboard

```
http://your-app.test/agent-board
```

---

## ⚡ Artisan Commands

```bash
# Queue all in-progress tasks for AI processing (async — recommended)
php artisan agent-board:automate

# Run synchronously (wait for results — good for testing)
php artisan agent-board:automate --sync

# Dry run — show AI plan without executing
php artisan agent-board:automate --dry-run

# Process a single task
php artisan agent-board:automate --task=PROJ-123

# List your in-progress tasks
php artisan agent-board:sync

# Output as JSON
php artisan agent-board:sync --json
```

---

## 📅 Scheduling

Add to `routes/console.php` (Laravel 11+):

```php
use Illuminate\Support\Facades\Schedule;

Schedule::command('agent-board:automate')->everyFifteenMinutes();
```

---

## 🔔 Webhooks (Real-time Triggers)

Register these in your JIRA/Confluence settings so agents trigger instantly when a task moves to In Progress — no polling needed.

```
POST https://your-app.com/agent-board/webhook/jira
POST https://your-app.com/agent-board/webhook/confluence
```

Payloads are verified with HMAC-SHA256. Set secrets in `.env`:

```dotenv
AGENT_BOARD_JIRA_WEBHOOK_SECRET=your-secret
AGENT_BOARD_CONFLUENCE_WEBHOOK_SECRET=your-secret
```

---

## 🧩 Programmatic Usage

```php
use DevBridge\AgentBoard\Facades\AgentBoard;

// Run automation for all in-progress tasks
$result = AgentBoard::runAutomationCycle(app('agent-board.jira'));
// ['processed' => 5, 'succeeded' => 4, 'failed' => 0, 'low_confidence' => 1]

// Process a single task
$result = AgentBoard::processTask($task, app('agent-board.jira'));

// Dry run — get AI plans without executing
$plans = AgentBoard::planTasks($tasks);
```

---

## 🔌 Extending the Package

### Add a new PM provider (e.g. Linear)

```php
final class LinearService implements ProjectManagementInterface
{
    public function connect(): bool { ... }
    public function getProjects(): Collection { ... }
    // ... implement all interface methods
    public function getProviderName(): string { return 'Linear'; }
}

// In AppServiceProvider::register()
$this->app->bind('agent-board.linear', LinearService::class);
```

### Add a new AI driver (e.g. local Ollama)

```php
final class OllamaAgentService implements AiAgentInterface
{
    public function processTask(TaskDTO $task, array $tools = []): AgentResultDTO { ... }
    public function getAgentIdentifier(): string { return 'ollama:llama3'; }
    // ... implement all interface methods
}
```

### Add a custom AI tool

```php
final class CreateGitBranchTool implements AiToolInterface
{
    public function getName(): string { return 'create_git_branch'; }
    public function getDescription(): string { return 'Create a new git branch for this task.'; }
    public function getSchema(): array {
        return [
            'type' => 'object',
            'properties' => [
                'branch_name' => ['type' => 'string'],
            ],
            'required' => ['branch_name'],
        ];
    }
    public function execute(array $parameters): mixed {
        exec('git checkout -b ' . escapeshellarg($parameters['branch_name']));
        return ['success' => true, 'branch' => $parameters['branch_name']];
    }
}
```

### Register a custom agent profile

```php
use DevBridge\AgentBoard\Services\AI\AgentFactory;

$this->app->afterResolving(AgentFactory::class, function (AgentFactory $factory) {
    $factory->registerProfile('security', [
        'tools' => ['read_file', 'search_codebase'],
        'system_prompt' => 'You are a security code reviewer. Identify OWASP Top 10 vulnerabilities.',
    ]);
});
```

---

## 🏗️ Architecture

```
nisarg24/laravel-agent-board
│
├── src/
│   ├── AgentBoardServiceProvider.php
│   ├── Contracts/                    ← All boundaries are interfaces (SOLID)
│   │   ├── ProjectManagementInterface
│   │   ├── AiAgentInterface
│   │   ├── AiToolInterface
│   │   └── KanbanProviderInterface
│   ├── Services/
│   │   ├── Jira/JiraService          ← JIRA REST API v3
│   │   ├── Confluence/ConfluenceService
│   │   ├── AI/OpenAiAgentService     ← GPT-4o agentic tool-call loop
│   │   ├── AI/AnthropicAgentService  ← Claude tool-use agentic loop
│   │   ├── AI/AgentFactory           ← Per-task profile resolver
│   │   ├── AI/Tools/AgentTools       ← ReadFile, WriteFile, Shell, Search
│   │   └── Automation/TaskAutomationService ← Orchestrator
│   ├── Security/
│   │   ├── ConnectionRepository      ← Encrypted credential storage
│   │   └── CommandSanitizer          ← Allowlist + pattern blocking
│   ├── Monitoring/
│   │   ├── AgentExecutionLogger      ← DB audit trail
│   │   └── TokenUsageService         ← Cost tracking per model
│   ├── Resilience/CircuitBreaker     ← CLOSED/OPEN/HALF-OPEN
│   ├── Webhooks/WebhookController    ← HMAC-verified push events
│   ├── DTOs/                         ← Immutable value objects
│   ├── Enums/                        ← TaskStatus, TaskPriority
│   ├── Events/                       ← Assigned, Completed, Failed
│   ├── Jobs/ProcessTaskWithAgentJob  ← Async, retryable, exponential backoff
│   ├── Console/Commands/             ← automate, sync
│   ├── Http/Controllers/             ← Dashboard, Automation, Settings, Monitoring
│   └── Facades/AgentBoard
│
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── pages/dashboard.blade.php     ← Kanban + drag-drop + activity feed
│   ├── pages/monitoring.blade.php    ← Logs, costs, circuit breaker
│   └── pages/settings.blade.php
│
├── routes/web.php + api.php
├── database/migrations/              ← 3 tables
├── config/agent-board.php
├── phpstan.neon                      ← Level 8, Larastan 3.x
├── pint.json                         ← Laravel preset
└── tests/
    ├── Unit/                         ← DTOs, Enums, Tools, AgentFactory
    └── Feature/                      ← JiraService, AutomationService, Controllers
```

---

## 🏛️ SOLID Compliance

| Principle | Implementation |
|---|---|
| **Single Responsibility** | Each class has one job: `JiraService` talks to JIRA, `AgentFactory` resolves profiles, `TokenUsageService` tracks costs |
| **Open/Closed** | New providers, AI drivers, and tools are added by implementing interfaces — no existing class is modified |
| **Liskov Substitution** | `JiraService` and `ConfluenceService` are fully interchangeable. `OpenAiAgentService` and `AnthropicAgentService` are fully interchangeable |
| **Interface Segregation** | `KanbanProviderInterface` is separate from `ProjectManagementInterface` — not all providers expose kanban boards |
| **Dependency Inversion** | `TaskAutomationService` depends on `AiAgentInterface`, not `OpenAiAgentService`. All wiring happens in the service provider |

---

## 🧪 Running Tests

```bash
composer test
# or
./vendor/bin/phpunit

# Unit tests only
./vendor/bin/phpunit --testsuite Unit

# Feature tests only
./vendor/bin/phpunit --testsuite Feature

# With coverage report
./vendor/bin/phpunit --coverage-text

# Code style
./vendor/bin/pint

# Static analysis
./vendor/bin/phpstan analyse --configuration=phpstan.neon
```

---

## 🔒 Security Notes

**API Token Storage** — All tokens are encrypted at rest using `Crypt::encryptString()`. Never stored in plain text.

**Shell Command Safety** — `RunShellCommandTool` has two layers: an allowlist of permitted commands and a regex pattern sanitiser that blocks injection attempts even within allowed commands.

**Webhook Verification** — JIRA and Confluence payloads are verified with HMAC-SHA256.

**Rate Limiting** — Automation endpoints throttled at 20 requests/minute per user.

**Circuit Breaker** — After 5 consecutive failures, a provider is blocked for 5 minutes.

---

## 📦 Publishing Assets

```bash
php artisan vendor:publish --tag=agent-board-config
php artisan vendor:publish --tag=agent-board-migrations
php artisan vendor:publish --tag=agent-board-views
php artisan vendor:publish --tag=agent-board-assets
```

---

## 🗺️ Roadmap

- [ ] Ollama driver (local models, zero API cost)
- [ ] Linear.app provider
- [ ] GitHub Issues provider
- [ ] Slack/Teams notifications on agent completion
- [ ] Per-user PM account connections
- [ ] Agent diff view (show exact file changes)
- [ ] Rollback mechanism
- [ ] Budget alerts for monthly AI spend

---

## 📝 Changelog

### v1.0.0 — March 2026
- Initial release targeting **Laravel 13** and **PHP 8.3+**
- JIRA and Confluence providers
- OpenAI and Anthropic AI drivers with full agentic tool-call loops
- Kanban dashboard with drag-and-drop (SortableJS)
- Monitoring dashboard with cost tracking
- Circuit breaker resilience pattern
- Webhook support with HMAC-SHA256 verification
- Encrypted credential storage
- Async queue processing with exponential backoff
- Full test suite: PHPUnit 12, Orchestra Testbench 10, Mockery
- CI pipeline: GitHub Actions, PHP 8.3/8.4/8.5, PHPStan level 8, Larastan 3, Pint, Codecov

---

## 🤝 Contributing

```bash
./vendor/bin/pint              # Fix code style
./vendor/bin/phpstan analyse   # Static analysis
./vendor/bin/phpunit           # Run tests
```

---

## 📄 License

MIT — see [LICENSE](LICENSE).

---

Built with [Laravel 13](https://laravel.com), [OpenAI PHP](https://github.com/openai-php/client), [GuzzleHttp](https://docs.guzzlephp.org), and [SortableJS](https://sortablejs.github.io/Sortable/).
