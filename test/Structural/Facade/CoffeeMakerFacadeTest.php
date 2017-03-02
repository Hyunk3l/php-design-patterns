<?php

namespace PhpDesignPatterns\Tests\Structural\Facade;

use PhpDesignPatterns\Structural\Facade\CoffeeMakerFacade;

/**
 * Class CoffeeMakerFacadeTest
 * @package PhpDesignPatterns\Tests\Structural\Facade
 */
class CoffeeMakerFacadeTest extends \PHPUnit_Framework_TestCase
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