<?php

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

    public function run(): mixed
    {
        return $this->command->execute();
    }
}
