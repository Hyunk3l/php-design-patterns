<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Mercedes;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class SportCar extends BaseCar
{
    public function __toString(): string
    {
        $car_details = "Mercedes Sport car!".PHP_EOL;
        $car_details .= "Name:".$this->getName().PHP_EOL;
        $car_details .= "Color:".$this->getColor().PHP_EOL;
        $car_details .= "Engine:".$this->getEngineSpecs().PHP_EOL;
        return $car_details;
    }
}