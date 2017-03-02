<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

/**
 * Class TvControl
 * @package Hyunk3l\PhpDesignPatterns\Behavioral\Command
 */
class TvControl implements ReceiverInterface
{
    /**
     * Execute the command in input.
     *
     * @param $command
     * @return string
     */
    public function executeCommand($command)
    {
        /* Dummy implementation here. You would implement the logic to execute the command. */
        return $command;
    }
}
