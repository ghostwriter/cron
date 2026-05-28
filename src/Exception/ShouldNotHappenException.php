<?php

declare(strict_types=1);

namespace Ghostwriter\Cron\Exception;

use Ghostwriter\Cron\Interface\ExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements ExceptionInterface {}
