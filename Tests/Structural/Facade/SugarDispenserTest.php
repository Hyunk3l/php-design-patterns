<?php

namespace PhpDesignPatterns\Tests\Structural\Facade;

use PhpDesignPatterns\Structural\Facade\SugarDispenser;

/**
 * Class SugarDispenserTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class SugarDispenserTest extends \PHPUnit_Framework_TestCase
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