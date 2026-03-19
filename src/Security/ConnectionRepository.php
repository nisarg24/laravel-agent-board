<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Security;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

final class ConnectionRepository {
    public function store(string $provider, array $credentials): void {
        DB::table('agent_board_connections')->updateOrInsert(
            ['provider' => $provider],
            [
                'base_url' => $credentials['base_url'],
                'email' => $credentials['email'],
                'api_token_encrypted' => Crypt::encryptString($credentials['api_token']),
                'is_active' => true,
                'metadata' => json_encode($credentials['metadata'] ?? []),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }

    public function get(string $provider): ?array {
        $row = DB::table('agent_board_connections')
            ->where('provider', $provider)
            ->where('is_active', true)
            ->first();

        if (! $row) {
            return null;
        }

        return [
            'base_url' => $row->base_url,
            'email' => $row->email,
            'api_token' => Crypt::decryptString($row->api_token_encrypted),
        ];
    }

    public function markConnected(string $provider): void {
        DB::table('agent_board_connections')
            ->where('provider', $provider)
            ->update(['last_connected_at' => now()]);
    }

    public function deactivate(string $provider): void {
        DB::table('agent_board_connections')
            ->where('provider', $provider)
            ->update(['is_active' => false]);
    }

    public function hasCredentials(string $provider): bool {
        return DB::table('agent_board_connections')
            ->where('provider', $provider)
            ->where('is_active', true)
            ->exists();
    }
}
