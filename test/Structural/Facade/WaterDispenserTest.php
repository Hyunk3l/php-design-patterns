<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\WaterDispenser;
use PHPUnit\Framework\TestCase;

/**
 * Class WaterDispenserTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class WaterDispenserTest extends TestCase
{
    /**
     * Testing get product.
     */
    public function testGetProduct()
    {
        $expected = 'water: 5ml';
        $water_dispenser = new WaterDispenser;
        $this->assertEquals($expected, $water_dispenser->getProduct(), 'The result is not the expected one.');
    }
}