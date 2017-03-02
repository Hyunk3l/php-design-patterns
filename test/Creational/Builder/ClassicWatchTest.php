<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatch;

/**
 * Class ClassicWatchTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class ClassicWatchTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing add watch.
     */
    public function testWatchComponent()
    {
        $watch = new ClassicWatch;
        $mock_component = $this->getMock("PhpDesignPatterns\\Creational\\Builder\\Components\\ComponentInterface");
        $watch->addComponent("Test component", $mock_component);

        $expected = array("Test component" => $mock_component);
        $this->assertEquals($expected, $watch->getWatchComponents(), "the result is not the expected one.");
    }
}