<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\CoffeeDispenser;
use PHPUnit\Framework\TestCase;

/**
 * Class CoffeeDispenserTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class CoffeeDispenserTest extends TestCase
{
    /**
     * Testing get product.
     */
    public function testGetProduct()
    {
        $expected = 'coffee: 10mg';
        $coffee_dispenser = new CoffeeDispenser;
        $this->assertEquals($expected, $coffee_dispenser->getProduct(), 'The result is not the expected one.');
    }
}