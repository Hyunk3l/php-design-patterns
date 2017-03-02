<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

/**
 * Class CommandInvoker
 * @package Hyunk3l\PhpDesignPatterns\Behavioral\Command
 */
class CommandInvoker
{
    /**
     * Instance of CommandInterface.
     *
     * @var CommandInterface
     */
    private $command;

    /**
     * Set command dependency.
     *
     * @param CommandInterface $command
     * @return CommandInvoker
     */
    public function setCommand(CommandInterface $command)
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