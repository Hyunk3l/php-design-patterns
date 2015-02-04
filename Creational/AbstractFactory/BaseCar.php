<?php

namespace PhpDesignPatterns\Creational\AbstractFactory;

abstract class BaseCar implements CarInterface
{
    public function __construct($name, $color, $engine_specs)
    {
        $this->name         = $name;
        $this->color        = $color;
        $this->engine_specs = $engine_specs;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEngineSpecs()
    {
        return $this->engine_specs;
    }
}