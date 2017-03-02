<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\ReceiverInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\SwitchButtonCommand;
use PHPUnit\Framework\TestCase;

class SwitchButtonCommandTest extends TestCase
{
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
            ->with(SwitchButtonCommand::COMMAND_MESSAGE)
            ->willReturn(SwitchButtonCommand::COMMAND_MESSAGE);

        $this->assertEquals(
            SwitchButtonCommand::COMMAND_MESSAGE,
            (new SwitchButtonCommand($receiver))->execute()
        );
    }
}