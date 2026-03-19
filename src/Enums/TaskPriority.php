<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Enums;

enum TaskPriority: string {
    case CRITICAL = 'critical';
    case HIGH = 'high';
    case MEDIUM = 'medium';
    case LOW = 'low';

    public static function fromString(string $priority): self {
        return match (strtolower($priority)) {
            'critical', 'blocker', 'urgent' => self::CRITICAL,
            'high', 'major' => self::HIGH,
            'medium', 'normal', 'minor' => self::MEDIUM,
            default => self::LOW,
        };
    }
}
