<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\CommandInterface;
use Hyunk3l\PhpDesignPatterns\Behavioral\Command\CommandInvoker;
use PHPUnit\Framework\TestCase;

class CommandInvokerTest extends TestCase
{
    /**
     * @test
     */
    public function shouldRunAValidCommand()
    {
        $command = $this->getMockBuilder(CommandInterface::class)
            ->disableOriginalConstructor()
            ->setMethods(['execute'])
            ->getMock();
        $command->expects($this->once())
            ->method('execute')
            ->willReturn($expectedOutput = 'Dummy command!');

        $invoker = (new CommandInvoker())->setCommand($command);

        $this->assertEquals($expectedOutput, $invoker->run());
    }
}
