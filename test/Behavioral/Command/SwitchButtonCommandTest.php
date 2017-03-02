<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\ReceiverInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\SwitchButtonCommand;
use PHPUnit\Framework\TestCase;


/**
 * Class SwitchButtonCommandTest
 * @package PhpDesignPatterns\Tests\Behavioral\Command
 */
class SwitchButtonCommandTest extends TestCase
{
    /**
     * Testing execute.
     */
    public function testExecuteCommand()
    {
        $receiver = $this->getMockBuilder(ReceiverInterface::class)
            ->setMethods(["executeCommand"])
            ->disableOriginalConstructor()
            ->getMock();
        $receiver
            ->expects($this->once())
            ->method("executeCommand")
            ->with("Tv has been switched on.")
            ->will($this->returnValue("Tv has been switched on."))
        ;
        $command = new SwitchButtonCommand($receiver);
        $this->assertEquals("Tv has been switched on.", $command->execute());
    }
}