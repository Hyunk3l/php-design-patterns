<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\SportWatch;
use PHPUnit\Framework\TestCase;

/**
 * Class SportWatchTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class SportWatchTest extends TestCase
{
    /**
     * Testing add watch.
     */
    public function testWatchComponent()
    {
        $watch = new SportWatch;
        $mock_component = $this->getMockBuilder(ComponentInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $watch->addComponent("Test component", $mock_component);

        $expected = array("Test component" => $mock_component);
        $this->assertEquals($expected, $watch->getWatchComponents(), "the result is not the expected one.");
    }
}