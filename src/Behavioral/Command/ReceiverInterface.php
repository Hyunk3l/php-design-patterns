<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

interface ReceiverInterface
{
    public function executeCommand(string $command): string;
}
