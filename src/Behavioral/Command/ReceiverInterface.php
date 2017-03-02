<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

/**
 * Interface ReceiverInterface
 * @package Hyunk3l\PhpDesignPatterns\Behavioral\Command
 */
interface ReceiverInterface
{
    /**
     * Execute a command.
     *
     * @param $command
     * @return string
     */
    public function executeCommand($command);
}