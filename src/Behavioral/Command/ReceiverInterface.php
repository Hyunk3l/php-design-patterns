<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

interface ReceiverInterface
{
    public function executeCommand(string $command): string;
}
