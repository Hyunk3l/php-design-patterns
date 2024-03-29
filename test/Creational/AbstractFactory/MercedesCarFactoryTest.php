<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\MercedesCarFactory;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class MercedesCarFactoryTest extends TestCase
{
    private const string GENERIC_CAR_NAME = "A1 AMG";

    private const string GENERIC_CAR_COLOR = "grey space";

    private const string GENERIC_CAR_ENGINE_SPECS = "3.0 300cv";

    private MercedesCarFactory $mercedesCarFactory;

    protected function setUp(): void
    {
        $this->mercedesCarFactory = new MercedesCarFactory();
    }

    public static function providerCreateMercedesCars(): array
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

    #[DataProvider('providerCreateMercedesCars')]
    public function testShouldCreateMercedesCars(string $method, string $type)
    {
        $expected = "Mercedes $type car!\nName:A1 AMG\nColor:grey space\nEngine:3.0 300cv";

        $sportCar = $this->mercedesCarFactory->$method(
            self::GENERIC_CAR_NAME,
            self::GENERIC_CAR_COLOR,
            self::GENERIC_CAR_ENGINE_SPECS
        );

        $this->assertEquals($expected, $sportCar);
    }
}
