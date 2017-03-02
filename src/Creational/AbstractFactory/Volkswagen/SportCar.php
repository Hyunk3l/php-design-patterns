<?php

namespace PhpDesignPatterns\Creational\AbstractFactory\Volkswagen;

use PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

/**
 * Class SportCar
 * @package Creational\AbstractFactory\Volkswagen
 */
class SportCar extends BaseCar
{
    /**
     * Returns car details.
     *
     * @return string
     */
    public function __toString()
    {
        $car_details = "Volkswagen Sport car!".PHP_EOL;
        $car_details .= "Name:".$this->getName().PHP_EOL;
        $car_details .= "Color:".$this->getColor().PHP_EOL;
        $car_details .= "Engine:".$this->getEngineSpecs().PHP_EOL;
        return $car_details;
    }
}