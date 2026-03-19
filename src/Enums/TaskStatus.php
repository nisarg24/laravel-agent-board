<?php

declare(strict_types=1);

namespace DevBridge\AgentBoard\Enums;

enum TaskStatus: string {
    case TODO = 'todo';
    case IN_PROGRESS = 'in_progress';
    case IN_REVIEW = 'in_review';
    case AI_COMPLETED = 'ai_completed';
    case DEVELOPER_REVIEW = 'developer_review';
    case DONE = 'done';
    case BLOCKED = 'blocked';

    public static function fromJira(string $jiraStatus): self {
        return match (strtolower($jiraStatus)) {
            'to do', 'open', 'backlog' => self::TODO,
            'in progress', 'in development' => self::IN_PROGRESS,
            'in review', 'code review' => self::IN_REVIEW,
            'ai completed' => self::AI_COMPLETED,
            'developer review' => self::DEVELOPER_REVIEW,
            'done', 'closed', 'resolved' => self::DONE,
            'blocked', 'impediment' => self::BLOCKED,
            default => self::TODO,
        };
    }

    public function label(): string {
        return match ($this) {
            self::TODO => 'To Do',
            self::IN_PROGRESS => 'In Progress',
            self::IN_REVIEW => 'In Review',
            self::AI_COMPLETED => 'AI Completed',
            self::DEVELOPER_REVIEW => 'Developer Review',
            self::DONE => 'Done',
            self::BLOCKED => 'Blocked',
        };
    }

    public function color(): string {
        return match ($this) {
            self::TODO => '#6B7280',
            self::IN_PROGRESS => '#3B82F6',
            self::IN_REVIEW => '#F59E0B',
            self::AI_COMPLETED => '#8B5CF6',
            self::DEVELOPER_REVIEW => '#EC4899',
            self::DONE => '#10B981',
            self::BLOCKED => '#EF4444',
        };
    }
}
