<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Security;

use DevBridge\AgentBoard\Exceptions\SecurityException;

final class CommandSanitizer {
    private const ALLOWED_COMMANDS = ['php', 'composer', 'npm', 'yarn', 'git', 'grep', 'find', 'ls'];

    private const BLOCKED_PATTERNS = [
        '/system\s*\(/i',
        '/exec\s*\(/i',
        '/passthru\s*\(/i',
        '/shell_exec\s*\(/i',
        '/popen\s*\(/i',
        '/proc_open\s*\(/i',
        '/`[^`]+`/',
        '/\$\([^)]+\)/',
        '/>\s*\//',
        '/rm\s+-rf/i',
        '/chmod\s+777/i',
        '/curl\s+.*\|\s*bash/i',
        '/wget\s+.*\|\s*bash/i',
        '/eval\s*\(/i',
        '/base64_decode\s*\(/i',
    ];

    public function validate(string $command): void {
        $firstWord = explode(' ', trim($command))[0];

        if (! in_array($firstWord, self::ALLOWED_COMMANDS, true)) {
            throw new SecurityException(
                "Command '{$firstWord}' is not in the allowed list: " . implode(', ', self::ALLOWED_COMMANDS)
            );
        }

        foreach (self::BLOCKED_PATTERNS as $pattern) {
            if (preg_match($pattern, $command)) {
                throw new SecurityException(
                    'Command contains a blocked pattern and cannot be executed for security reasons.'
                );
            }
        }
    }

    public function isSafe(string $command): bool {
        try {
            $this->validate($command);

            return true;
        } catch (SecurityException) {
            return false;
        }
    }
}
