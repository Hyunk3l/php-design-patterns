<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\ReceiverInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\SwitchButtonCommand;
use PHPUnit\Framework\TestCase;

class SwitchButtonCommandTest extends TestCase
{
    public const COMMAND_MESSAGE = "Tv has been switched on.";

    /**
     * @test
     */
    public function shouldExecuteSwitchButtonCommand()
    {
        $receiver = $this->getMockBuilder(ReceiverInterface::class)
            ->setMethods(["executeCommand"])
            ->disableOriginalConstructor()
            ->getMock();
        $receiver
            ->expects($this->once())
            ->method("executeCommand")
            ->with(self::COMMAND_MESSAGE)
            ->willReturn(self::COMMAND_MESSAGE);

        $this->assertEquals(
            self::COMMAND_MESSAGE,
            (new SwitchButtonCommand($receiver))->execute()
        );
    }
}
