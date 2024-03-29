<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\CoffeeMakerFacade;
use PHPUnit\Framework\TestCase;

class CoffeeMakerFacadeTest extends TestCase
{

    public function testShouldMakeOneCoffeeIfNoNumberIsPassed()
    {
        $expected = [
            'coffee #1' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
        ];

        $cupsMade = (new CoffeeMakerFacade())->makeCups(0);

        $this->assertEquals($expected, $cupsMade);
    }


    public function testShouldMakeAConcreteNumberOfCoffees()
    {
        $expected = [
            'coffee #1' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #2' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #3' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #4' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
        ];

        $cupsMade = (new CoffeeMakerFacade())->makeCups(count($expected));

        $this->assertEquals($expected, $cupsMade);
    }
}
