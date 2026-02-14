<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class CommandInvoker
{
    public function __construct(private ?CommandInterface $command = null)
    {
    }

    public function setCommand(CommandInterface $command): self
    {
        $this->command = $command;
        return $this;
    }

    public function run(): string
    {
        if ($this->command === null) {
            throw new \LogicException("Command is not set.");
        }

        return $this->command->execute();
    }
}
