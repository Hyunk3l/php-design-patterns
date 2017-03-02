<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\CommandInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\CommandInvoker;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandInvokerTest
 * @package PhpDesignPatterns\Tests\Behavioral\Command
 */
class CommandInvokerTest extends TestCase
{
    /**
     * Testing the command.
     */
    public function testCommand()
    {
        $command = $this->getMockBuilder(CommandInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['execute'])
            ->getMock();
        $command
            ->expects($this->once())
            ->method('execute')
            ->will($this->returnValue($expected_output = 'Dummy command!'));
        $invoker = new CommandInvoker;
        $invoker->setCommand($command);
        $this->assertEquals($expected_output, $invoker->run());
    }
}