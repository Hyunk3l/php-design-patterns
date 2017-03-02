<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

class SwitchButtonCommand implements CommandInterface
{
    const COMMAND_MESSAGE = "Tv has been switched on.";

    private $control;

    public function __construct(ReceiverInterface $control)
    {
        $this->control = $control;
    }

    public function execute(): string
    {
        return $this->control->executeCommand(self::COMMAND_MESSAGE);
    }
}