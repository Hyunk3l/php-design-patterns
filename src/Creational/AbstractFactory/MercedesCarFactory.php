<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

require_once __DIR__ . '/AbstractCarFactory.php';

/**
 * Class MercedesCarFactory
 * @package Creational\AbstractFactory
 */
class MercedesCarFactory extends AbstractCarFactory
{
    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Mercedes\SportCar
     */
    public function createSportCar($name, $color, $engine_specs)
    {
        return new Mercedes\SportCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Mercedes\CityCar
     */
    public function createCityCar($name, $color, $engine_specs)
    {
        return new Mercedes\CityCar($name, $color, $engine_specs);
    }

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return Mercedes\FamilyCar
     */
    public function createFamilyCar($name, $color, $engine_specs)
    {
        return new Mercedes\FamilyCar($name, $color, $engine_specs);
    }
}