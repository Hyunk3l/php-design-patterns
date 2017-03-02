<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\PhpDesignPatterns\Structural\Flyweight\HeadphonesFlyweight;
use PHPUnit\Framework\TestCase;

/**
 * Class HeadphonesFlyweightTest
 * @package PhpDesignPatterns\Tests\Structural\Flyweight
 */
class HeadphonesFlyweightTest extends TestCase
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
