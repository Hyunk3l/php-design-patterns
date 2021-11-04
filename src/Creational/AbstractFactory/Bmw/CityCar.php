<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\Bmw;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BaseCar;

class CityCar extends BaseCar
{
    public function __toString(): string
    {
        return <<<EOT
         BMW City car!
         Name:{$this->getName()}
         Color:{$this->getColor()}
         Engine:{$this->getEngineSpecs()}
         EOT;
    }
}
