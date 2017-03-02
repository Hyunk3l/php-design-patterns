<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class TvControl implements ReceiverInterface
{
    public function executeCommand(string $command): string
    {
        /* Dummy implementation here. You would implement the logic to execute the command. */
        return $command;
    }
}
