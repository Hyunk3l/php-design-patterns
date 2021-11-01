<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes\CityCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes\FamilyCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes\SportCar;

class MercedesCarFactory extends AbstractCarFactory
{
    public function createSportCar(string $name, string $color, string $engineSpecs): CarInterface
    {
        return new SportCar($name, $color, $engineSpecs);
    }

    public function createCityCar(string $name, string $color, string $engineSpecs): CarInterface
    {
        return new CityCar($name, $color, $engineSpecs);
    }

    public function createFamilyCar(string $name, string $color, string $engineSpecs): CarInterface
    {
        return new FamilyCar($name, $color, $engineSpecs);
    }
}
