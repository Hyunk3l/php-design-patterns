<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BmwCarFactory;
use PHPUnit\Framework\TestCase;

class BmwCarFactoryTest extends TestCase
{
    const GENERIC_CAR_NAME = "i7";

    const GENERIC_CAR_COLOR = "red";

    const GENERIC_CAR_ENGINE_SPECS = "3.0 TDI";

    private $bmwCarFactory;

    public function setUp()
    {
        $this->bmwCarFactory = new BmwCarFactory();
    }

    /**
     * @test
     */
    public function shouldCreateABmwSportCar()
    {
        $expected = $this->createCarDescription(
            "Sport",
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $sportCar = (string) $this->bmwCarFactory->createSportCar(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $this->assertEquals($expected, $sportCar);
    }

    /**
     * @test
     */
    public function shouldCreateABmwCityCar()
    {
        $expected = $this->createCarDescription(
            "City",
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $cityCar  = (string) $this->bmwCarFactory->createCityCar(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $this->assertEquals($expected, $cityCar);
    }

    /**
     * @test
     */
    public function shouldCreateABmwFamilyCar()
    {
        $expected = $this->createCarDescription(
            "Family",
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $familyCar  = (string) $this->bmwCarFactory->createFamilyCar(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $this->assertEquals($expected, $familyCar);
    }

    private function createCarDescription($type, $name, $color, $engine)
    {
        return "BMW $type car!". PHP_EOL. "Name:$name" . PHP_EOL . "Color:$color". PHP_EOL."Engine:$engine".PHP_EOL;
    }
}