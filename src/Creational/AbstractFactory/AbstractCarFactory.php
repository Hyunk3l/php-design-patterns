<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

abstract class AbstractCarFactory
{
    abstract public function createSportCar(string $name, string $color, string $engineSpecs): CarInterface;

    abstract public function createFamilyCar(string $name, string $color, string $engineSpecs): CarInterface;

    abstract public function createCityCar(string $name, string $color, string $engineSpecs): CarInterface;
}
