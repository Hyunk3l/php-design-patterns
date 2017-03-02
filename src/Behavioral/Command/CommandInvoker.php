<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class CommandInvoker
{
    /**
     * Instance of CommandInterface.
     *
     * @var CommandInterface
     */
    private $command;

    public function setCommand(CommandInterface $command): self
    {
        $this->command = $command;
        return $this;
    }

    /**
     * Run the command.
     *
     * @return mixed
     */
    public function run()
    {
        return $this->command->execute();
    }
}