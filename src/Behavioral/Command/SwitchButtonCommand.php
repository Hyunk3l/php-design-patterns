<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class SwitchButtonCommand implements CommandInterface
{
    private const string COMMAND_MESSAGE = "Tv has been switched on.";

    public function __construct(private ReceiverInterface|false $control)
    {
        if ($control === false) {
            throw new \InvalidArgumentException("ReceiverInterface must be valid");
        }
    }

    public function execute(): string
    {
        return $this->control->executeCommand(self::COMMAND_MESSAGE);
    }
}
