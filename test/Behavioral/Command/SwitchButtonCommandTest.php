<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\ReceiverInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\SwitchButtonCommand;
use PHPUnit\Framework\TestCase;

class SwitchButtonCommandTest extends TestCase
{
    private const COMMAND_MESSAGE = "Tv has been switched on.";

    public function testShouldExecuteSwitchButtonCommand()
    {
        $receiver = $this->getMockBuilder(ReceiverInterface::class)
            ->onlyMethods(["executeCommand"])
            ->disableOriginalConstructor()
            ->getMock();
        $receiver
            ->expects($this->once())
            ->method("executeCommand")
            ->with(self::COMMAND_MESSAGE)
            ->willReturn(self::COMMAND_MESSAGE);

        $result = (new SwitchButtonCommand($receiver))->execute();

        $this->assertEquals(self::COMMAND_MESSAGE, $result);
    }

    public function testShouldFailInCaseReceiverIsNotValid()
    {
        $this->expectException(\InvalidArgumentException::class);
        $result = (new SwitchButtonCommand(control: false));
    }
}
