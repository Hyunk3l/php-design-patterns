<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\SugarDispenser;
use PHPUnit\Framework\TestCase;

/**
 * Class SugarDispenserTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class SugarDispenserTest extends TestCase
{
    /**
     * Testing get product.
     */
    public function testGetProduct()
    {
        $expected = 'sugar: 3mg';
        $sugar_dispenser = new SugarDispenser;
        $this->assertEquals($expected, $sugar_dispenser->getProduct(), 'The result is not the expected one.');
    }
}