<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

/**
 * Class SportCar
 * @package Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes
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
        $car_details = "Mercedes Sport car!".PHP_EOL;
        $car_details .= "Name:".$this->getName().PHP_EOL;
        $car_details .= "Color:".$this->getColor().PHP_EOL;
        $car_details .= "Engine:".$this->getEngineSpecs().PHP_EOL;
        return $car_details;
    }
}