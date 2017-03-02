<?php

namespace PhpDesignPatterns\Creational\AbstractFactory;

/**
 * Class BmwCarFactory
 * @package Creational\AbstractFactory
 */
class BmwCarFactory extends AbstractCarFactory
{
    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Bmw\SportCar
     */
    public function createSportCar($name, $color, $engine_specs)
    {
        return new Bmw\SportCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Bmw\CityCar
     */
    public function createCityCar($name, $color, $engine_specs)
    {
        return new Bmw\CityCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Bmw\FamilyCar
     */
    public function createFamilyCar($name, $color, $engine_specs)
    {
        return new Bmw\FamilyCar($name, $color, $engine_specs);
    }
}