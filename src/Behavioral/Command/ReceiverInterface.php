<?php

namespace PhpDesignPatterns\Behavioral\Command;

/**
 * Interface ReceiverInterface
 * @package PhpDesignPatterns\Behavioral\Command
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