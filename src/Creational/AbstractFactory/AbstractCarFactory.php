<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

/**
 * Class AbstractCarFactory
 * @package Creational\AbstractFactory
 */
abstract class AbstractCarFactory
{
    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return mixed
     */
    abstract function createSportCar($name, $color, $engine_specs);

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return mixed
     */
    abstract function createFamilyCar($name, $color, $engine_specs);

    /**
     * @param $name
     * @param $color
     * @param $engine_specs
     * @return mixed
     */
    abstract function createCityCar($name, $color, $engine_specs);
}