<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw\SportCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw\CityCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw\FamilyCar;

class BmwCarFactory extends AbstractCarFactory
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
