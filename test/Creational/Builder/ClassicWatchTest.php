<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatch;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;
use PHPUnit\Framework\TestCase;

class ClassicWatchTest extends TestCase
{
    /**
     * @test
     */
    public function shouldAddAComponentToAWatch()
    {
        $watch = new ClassicWatch();
        $mockedComponent = $this->getMockBuilder(ComponentInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $watch->addComponent("Test component", $mockedComponent);

        $expected = ["Test component" => $mockedComponent];
        $this->assertEquals($expected, $watch->getWatchComponents(), "the result is not the expected one.");
    }
}
