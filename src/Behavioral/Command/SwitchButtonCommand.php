<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class SwitchButtonCommand implements CommandInterface
{
    const COMMAND_MESSAGE = "Tv has been switched on.";

    public function __construct(private ReceiverInterface $control)
    {
    }

    public function execute(): string
    {
        return $this->control->executeCommand(self::COMMAND_MESSAGE);
    }
}
