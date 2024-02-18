<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BmwCarFactory;
use PHPUnit\Framework\TestCase;

class BmwCarFactoryTest extends TestCase
{
    private const GENERIC_CAR_NAME = "i7";

    private const GENERIC_CAR_COLOR = "red";

    private const GENERIC_CAR_ENGINE_SPECS = "3.0 TDI";

    private BmwCarFactory $bmwCarFactory;

    protected function setUp(): void
    {
        $this->bmwCarFactory = new BmwCarFactory();
    }

    public function testShouldCreateABmwSportCar()
    {
        $expected = $this->createCarDescription("Sport");

        $sportCar = $this->bmwCarFactory->createSportCar(
            color: self::GENERIC_CAR_COLOR,
            name: self::GENERIC_CAR_NAME,
            engineSpecs: self::GENERIC_CAR_ENGINE_SPECS
        );

        $this->assertEquals($expected, $sportCar);
    }


    public function testShouldCreateABmwCityCar()
    {
        $expected = $this->createCarDescription("City");

        $cityCar = $this->bmwCarFactory->createCityCar(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );

        $this->assertEquals($expected, $cityCar);
    }


    public function testShouldCreateABmwFamilyCar()
    {
        $expected = $this->createCarDescription("Family");

        $familyCar = $this->bmwCarFactory->createFamilyCar(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );

        $this->assertEquals($expected, $familyCar);
    }

    private function createCarDescription(string $type): string
    {
        return "BMW $type car!" . PHP_EOL . "Name:" . (self::GENERIC_CAR_NAME) . "" . PHP_EOL . "Color:" . (self::GENERIC_CAR_COLOR) . "" . PHP_EOL . "Engine:" . (self::GENERIC_CAR_ENGINE_SPECS) . "";
    }
}
