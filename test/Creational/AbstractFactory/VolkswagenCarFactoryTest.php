<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\VolkswagenCarFactory;
use PHPUnit\Framework\TestCase;

class VolkswagenCarFactoryTest extends TestCase
{
    private $wolkswagenCarFactory;

    public function setUp()
    {
        $this->wolkswagenCarFactory = new VolkswagenCarFactory();
    }

    /**
     * @test
     * @dataProvider providerVolkswagenCars
     */
    public function shouldCreateVolkswagenCars(string $method, string $type)
    {
        $expected = "Volkswagen $type car!\nName:Golf GTI\nColor:candy white\nEngine:3.0 200cv\n";
        $car = (string) $this->wolkswagenCarFactory->$method("Golf GTI", "candy white", "3.0 200cv");
        $this->assertEquals($expected, $car);
    }

    public function providerVolkswagenCars()
    {
        return [
            'should create sport car' => [
                'method' => 'createSportCar',
                'type' => 'Sport',
            ],
            'should create city car' => [
                'method' => 'createCityCar',
                'type' => 'City',
            ],
            'should create family car' => [
                'method' => 'createFamilyCar',
                'type' => 'Family',
            ],
        ];
    }
}