<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Facade;

use Hyunk3l\PhpDesignPatterns\Structural\Facade\CoffeeMakerFacade;
use PHPUnit\Framework\TestCase;

class CoffeeMakerFacadeTest extends TestCase
{
    /**
     * @test
     */
    public function shouldMakeOneCoffeeIfNoNumberIsPassed()
    {
        $expected = [
            'coffee #1' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
        ];
        $this->assertEquals(
            $expected,
            (new CoffeeMakerFacade())->makeCups(0)
        );
    }

    /**
     * @test
     */
    public function shouldMakeAConcreteNumberOfCoffees()
    {
        $expected = [
            'coffee #1' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #2' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #3' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
            'coffee #4' => 'sugar: 3mg,coffee: 10mg,water: 5ml',
        ];
        $this->assertEquals(
            $expected,
            (new CoffeeMakerFacade())->makeCups(count($expected))
        );
    }
}
