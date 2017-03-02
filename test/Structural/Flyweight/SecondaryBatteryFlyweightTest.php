<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\PhpDesignPatterns\Structural\Flyweight\SecondaryBatteryFlyweight;

/**
 * Class SecondaryBatteryFlyweightTest
 * @package PhpDesignPatterns\Tests\Structural\Flyweight
 */
class SecondaryBatteryFlyweightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing getPrice.
     */
    public function testGetPrice()
    {
        $expected   = 14.99;
        $flyweight  = new SecondaryBatteryFlyweight;
        $this->assertEquals($expected, $flyweight->getPrice());
    }
}
