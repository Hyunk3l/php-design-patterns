<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Behavioral\Command;

use Hyunk3l\PhpDesignPatterns\Behavioral\Command\TvControl;
use PHPUnit\Framework\TestCase;

class TvControlTest extends TestCase
{
    /**
     * @test
     */
    public function shouldExecuteACommand()
    {
        $expectedCommand = "dummy command.";

        $result = (new TvControl())->executeCommand($expectedCommand);

        $this->assertEquals($expectedCommand, $result);
    }
}
