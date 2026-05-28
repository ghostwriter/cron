<?php

declare(strict_types=1);

namespace Ghostwriter\Cron;

use Ghostwriter\Container\Container;
use Ghostwriter\Cron\Interface\CronInterface;
use Ghostwriter\Cron\Interface\SchedulerInterface;
use Override;

/** @see CronTest */
final readonly class Cron implements CronInterface
{
    public function __construct(
        private SchedulerInterface $scheduler,
    ) {}

    public static function new(): self
    {
        return Container::getInstance()->get(self::class);
    }

    #[Override]
    public function scheduler(): SchedulerInterface
    {
        return $this->scheduler;
    }
}
