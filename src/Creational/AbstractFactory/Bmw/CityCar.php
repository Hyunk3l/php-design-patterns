<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw;

require_once __DIR__ . '/../BaseCar.php';

use PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

/**
 * Class CityCar
 * @package Creational\AbstractFactory\Bmw
 */
class CityCar extends BaseCar
{
    /**
     * Returns car details.
     *
     * @return string
     */
    public function __toString()
    {
        $car_details = "BMW City car!".PHP_EOL;
        $car_details .= "Name:".$this->getName().PHP_EOL;
        $car_details .= "Color:".$this->getColor().PHP_EOL;
        $car_details .= "Engine:".$this->getEngineSpecs().PHP_EOL;
        return $car_details;
    }
}