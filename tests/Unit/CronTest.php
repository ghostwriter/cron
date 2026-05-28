<?php

declare(strict_types=1);

namespace Tests\Unit;

use Generator;
use Ghostwriter\Cron\Cron;
use Ghostwriter\Cron\Interface\CronInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Throwable;

use function is_a;

#[CoversClass(Cron::class)]
final class CronTest extends TestCase
{
    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(Cron::class, CronInterface::class, true));
    }
}
