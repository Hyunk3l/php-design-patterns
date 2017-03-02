<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Volkswagen\SportCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Volkswagen\CityCar;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Volkswagen\FamilyCar;

class VolkswagenCarFactory extends AbstractCarFactory
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