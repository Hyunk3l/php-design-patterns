<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class CityCar extends BaseCar
{
    public function __toString(): string
    {
        $car_details = "BMW City car!".PHP_EOL;
        $car_details .= "Name:".$this->getName().PHP_EOL;
        $car_details .= "Color:".$this->getColor().PHP_EOL;
        $car_details .= "Engine:".$this->getEngineSpecs().PHP_EOL;
        return $car_details;
    }
}