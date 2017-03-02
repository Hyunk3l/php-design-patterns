<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\CoffeeMakerFacade;
use PHPUnit\Framework\TestCase;

/**
 * Class CoffeeMakerFacadeTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class CoffeeMakerFacadeTest extends TestCase
{
    /**
     * Testing get product.
     */
    public function testGetProduct()
    {
        $expected = array(
            'coffee #1' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #2' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #3' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #4' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
        );
        $coffee_maker = new CoffeeMakerFacade;
        $this->assertEquals($expected, $coffee_maker->makeCups(count($expected)), 'The result is not the expected one.');
    }
}