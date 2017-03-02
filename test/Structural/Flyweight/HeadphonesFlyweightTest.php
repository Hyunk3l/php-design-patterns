<?php

namespace PhpDesignPatterns\Tests\Structural\Flyweight;

use PhpDesignPatterns\Structural\Flyweight\HeadphonesFlyweight;

/**
 * Class HeadphonesFlyweightTest
 * @package PhpDesignPatterns\Tests\Structural\Flyweight
 */
class HeadphonesFlyweightTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing getPrice.
     */
    public function testGetPrice()
    {
        $expected   = 29.99;
        $flyweight  = new HeadphonesFlyweight;
        $this->assertEquals($expected, $flyweight->getPrice());
    }
}
