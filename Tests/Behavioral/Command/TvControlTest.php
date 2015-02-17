<?php

namespace PhpDesignPatterns\Tests\Behavioral\Command;

use PhpDesignPatterns\Behavioral\Command\TvControl;

/**
 * Class TvControlTest
 * @package PhpDesignPatterns\Tests\Behavioral\Command
 */
class TvControlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing execute.
     */
    public function testExecuteCommand()
    {
        $control            = new TvControl;
        $expected_command   = "dummy command.";
        $this->assertEquals($expected_command, $control->executeCommand($expected_command));
    }
}