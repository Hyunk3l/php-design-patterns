<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Volkswagen;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class SportCar extends BaseCar
{
    public function __toString(): string
    {
        return <<<EOT
         Volkswagen Sport car!
         Name:{$this->getName()}
         Color:{$this->getColor()}
         Engine:{$this->getEngineSpecs()}
         EOT;
    }
}
