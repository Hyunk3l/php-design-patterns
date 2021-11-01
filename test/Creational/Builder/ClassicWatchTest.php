<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatch;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ClassicWatchTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class ClassicWatchTest extends TestCase
{
    /**
     * Testing add watch.
     */
    public function testWatchComponent()
    {
        $watch = new ClassicWatch();
        $mockedComponent = $this->getMockBuilder(ComponentInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $watch->addComponent("Test component", $mockedComponent);

        $expected = array("Test component" => $mockedComponent);
        $this->assertEquals($expected, $watch->getWatchComponents(), "the result is not the expected one.");
    }
}
