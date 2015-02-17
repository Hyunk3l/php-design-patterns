<?php

namespace PhpDesignPatterns\Behavioral\Command;

/**
 * Class SwitchButtonCommand
 * @package PhpDesignPatterns\Behavioral\Command
 */
class SwitchButtonCommand implements CommandInterface
{
    /**
     * Instance of ReceiverInterface.
     *
     * @var ReceiverInterface
     */
    private $control;

    /**
     * Class constructor.
     *
     * @param ReceiverInterface $control
     */
    public function __construct(ReceiverInterface $control)
    {
        $this->control = $control;
    }

    /**
     * Execute the switch tv command.
     *
     * @return string
     */
    public function execute()
    {
        return $this->control->executeCommand("Tv has been switched on.");
    }
}