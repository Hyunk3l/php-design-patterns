<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

/**
 * Class VolkswagenCarFactory
 * @package Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory
 */
class VolkswagenCarFactory extends AbstractCarFactory
{
    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Volkswagen\SportCar
     */
    public function createSportCar($name, $color, $engine_specs)
    {
        return new Volkswagen\SportCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Volkswagen\CityCar
     */
    public function createCityCar($name, $color, $engine_specs)
    {
        return new Volkswagen\CityCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Volkswagen\FamilyCar
     */
    public function createFamilyCar($name, $color, $engine_specs)
    {
        return new Volkswagen\FamilyCar($name, $color, $engine_specs);
    }
}