<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

abstract class AbstractCarFactory
{
    abstract function createSportCar(string $name, string $color, string $engineSpecs): CarInterface;

    abstract function createFamilyCar(string $name, string $color, string $engineSpecs): CarInterface;

    abstract function createCityCar(string $name, string $color, string $engineSpecs): CarInterface;
}