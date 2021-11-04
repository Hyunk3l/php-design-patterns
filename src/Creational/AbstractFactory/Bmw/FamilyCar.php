<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class FamilyCar extends BaseCar
{
    public function __toString(): string
    {
        return <<<EOT
         BMW Family car!
         Name:{$this->getName()}
         Color:{$this->getColor()}
         Engine:{$this->getEngineSpecs()}
         EOT;
    }
}
