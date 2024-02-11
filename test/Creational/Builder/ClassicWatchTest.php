<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatch;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;
use PHPUnit\Framework\TestCase;

class ClassicWatchTest extends TestCase
{

    public function testShouldAddAComponentToAWatch()
    {
        $watch = new ClassicWatch();
        $mockedComponent = $this->getMockBuilder(ComponentInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $expected = ["Test component" => $mockedComponent];

        $watch->addComponent("Test component", $mockedComponent);

        $this->assertEquals($expected, $watch->getWatchComponents());
    }
}
