<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

interface CommandInterface
{
    public function execute(): string;
}
