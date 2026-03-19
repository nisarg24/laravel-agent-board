<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Http\Controllers;

use DevBridge\AgentBoard\Contracts\ProjectManagementInterface;
use DevBridge\AgentBoard\Security\ConnectionRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

final class SettingsController extends Controller {
    public function __construct(
        private readonly ConnectionRepository $connections,
    ) {}

    public function index(): View {
        return view('agent-board::pages.settings', [
            'config' => $this->safeConfig(),
        ]);
    }

    public function testConnection(string $provider): JsonResponse {
        /** @var ProjectManagementInterface $pm */
        $pm = app("agent-board.{$provider}");

        try {
            $connected = $pm->connect();

            if ($connected) {
                $this->connections->markConnected($provider);
            }

            return response()->json([
                'success' => $connected,
                'provider' => $pm->getProviderName(),
                'message' => $connected ? 'Connection successful!' : 'Connection failed.',
            ]);
        } catch (\Throwable $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 422);
        }
    }

    public function update(Request $request): JsonResponse {
        $validated = $request->validate([
            'active_provider' => 'required|in:jira,confluence,both',
            'providers.jira.base_url' => 'nullable|url',
            'providers.jira.email' => 'nullable|email',
            'providers.jira.api_token' => 'nullable|string',
            'providers.confluence.base_url' => 'nullable|url',
            'providers.confluence.email' => 'nullable|email',
            'providers.confluence.api_token' => 'nullable|string',
            'ai.driver' => 'required|in:openai,anthropic',
            'ai.openai.model' => 'nullable|string',
            'ai.anthropic.model' => 'nullable|string',
        ]);

        foreach (['jira', 'confluence'] as $provider) {
            $creds = $validated['providers'][$provider] ?? [];
            if (! empty($creds['api_token']) && ! empty($creds['base_url'])) {
                $this->connections->store($provider, $creds);
            }
        }

        return response()->json(['success' => true, 'message' => 'Settings saved.']);
    }

    private function safeConfig(): array {
        $config = config('agent-board', []);
        $mask = fn (string $v) => $v ? str_repeat('•', 8) . substr($v, -4) : '';

        data_set($config, 'providers.jira.api_token', $mask(data_get($config, 'providers.jira.api_token', '')));
        data_set($config, 'providers.confluence.api_token', $mask(data_get($config, 'providers.confluence.api_token', '')));
        data_set($config, 'ai.openai.api_key', $mask(data_get($config, 'ai.openai.api_key', '')));
        data_set($config, 'ai.anthropic.api_key', $mask(data_get($config, 'ai.anthropic.api_key', '')));

        return $config;
    }
}
