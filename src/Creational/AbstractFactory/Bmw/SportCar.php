<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class SportCar extends BaseCar
{
    public function __toString(): string
    {
        return <<<EOT
         BMW Sport car!
         Name:{$this->getName()}
         Color:{$this->getColor()}
         Engine:{$this->getEngineSpecs()}
         EOT;
    }
}
