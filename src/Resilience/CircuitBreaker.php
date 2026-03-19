<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Resilience;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

final class CircuitBreaker {
    private const FAILURE_THRESHOLD = 5;

    private const RESET_TIMEOUT = 300;

    private const HALF_OPEN_TIMEOUT = 60;

    public function isOpen(string $service): bool {
        $failures = $this->getFailureCount($service);
        $lastReset = Cache::get($this->resetKey($service));

        if ($failures >= self::FAILURE_THRESHOLD) {
            if ($lastReset && now()->diffInSeconds($lastReset) < self::HALF_OPEN_TIMEOUT) {
                Log::warning("[AgentBoard] Circuit OPEN for service: {$service}. Blocking request.");

                return true;
            }

            Cache::put($this->resetKey($service), now(), self::RESET_TIMEOUT);
        }

        return false;
    }

    public function recordSuccess(string $service): void {
        Cache::forget($this->failureKey($service));
        Cache::forget($this->resetKey($service));

        Log::info("[AgentBoard] Circuit CLOSED for service: {$service} (success recorded).");
    }

    public function recordFailure(string $service): void {
        $failures = Cache::increment($this->failureKey($service));
        Cache::put($this->failureKey($service), $failures, self::RESET_TIMEOUT);

        if ($failures >= self::FAILURE_THRESHOLD) {
            Cache::put($this->resetKey($service), now(), self::RESET_TIMEOUT);
            Log::error("[AgentBoard] Circuit OPENED for service: {$service} after {$failures} failures.");
        }
    }

    public function reset(string $service): void {
        Cache::forget($this->failureKey($service));
        Cache::forget($this->resetKey($service));
    }

    public function getFailureCount(string $service): int {
        return (int) Cache::get($this->failureKey($service), 0);
    }

    public function getStatus(array $services): array {
        $status = [];

        foreach ($services as $service) {
            $status[$service] = [
                'status' => $this->isOpen($service) ? 'open' : 'closed',
                'failures' => $this->getFailureCount($service),
            ];
        }

        return $status;
    }

    private function failureKey(string $service): string {
        return "agent-board:circuit:{$service}:failures";
    }

    private function resetKey(string $service): string {
        return "agent-board:circuit:{$service}:reset_at";
    }
}
