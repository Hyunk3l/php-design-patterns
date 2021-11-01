<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\MercedesCarFactory;
use PHPUnit\Framework\TestCase;

class MercedesCarFactoryTest extends TestCase
{
    public const GENERIC_CAR_NAME = "A1 AMG";

    public const GENERIC_CAR_COLOR = "grey space";

    public const GENERIC_CAR_ENGINE_SPECS = "3.0 300cv";

    private $mercedesCarFactory;

    protected function setUp(): void
    {
        $this->mercedesCarFactory = new MercedesCarFactory();
    }

    /**
     * @test
     * @dataProvider providerCreateMercedesCars
     */
    public function shouldCreateMercedesCars(string $method, string $type)
    {
        $expected   = "Mercedes $type car!\nName:A1 AMG\nColor:grey space\nEngine:3.0 300cv\n";
        $sportCar     = (string) $this->mercedesCarFactory->$method(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );
        $this->assertEquals($expected, $sportCar);
    }

    public function providerCreateMercedesCars()
    {
        return [
            'should create sport car' => [
                'method' => 'createSportCar',
                'type' => 'Sport'
            ],
            'should create city car' => [
                'method' => 'createCityCar',
                'type' => 'City'
            ],
            'should create family car' => [
                'method' => 'createFamilyCar',
                'type' => 'Family'
            ],
        ];
    }
}
