<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\SportWatch;
use PHPUnit\Framework\TestCase;

class SportWatchTest extends TestCase
{

    public function testShouldAddAComponentToASportWatch()
    {
        $watch = new SportWatch();
        $mock_component = $this->getMockBuilder(ComponentInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $expected = ["Test component" => $mock_component];

        $watch->addComponent("Test component", $mock_component);

        $this->assertEquals($expected, $watch->getWatchComponents(), "the result is not the expected one.");
    }
}
