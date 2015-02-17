<?php

namespace PhpDesignPatterns\Tests\Behavioral\Command;

use PhpDesignPatterns\Behavioral\Command\CommandInvoker;

/**
 * Class CommandInvokerTest
 * @package PhpDesignPatterns\Tests\Behavioral\Command
 */
class CommandInvokerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing the command.
     */
    public function testCommand()
    {
        $command = $this->getMock('PhpDesignPatterns\\Behavioral\\Command\\CommandInterface', array('execute'));
        $command
            ->expects($this->once())
            ->method('execute')
            ->will($this->returnValue($expected_output = 'Dummy command!'))
        ;
        $invoker = new CommandInvoker;
        $invoker->setCommand($command);
        $this->assertEquals($expected_output, $invoker->run());
    }
}