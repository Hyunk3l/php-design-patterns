<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

abstract class BaseCar implements CarInterface
{
    private $name;
    private $color;
    private $engineSpecs;

    public function __construct(string $name, string $color, string $engineSpecs)
    {
        $this->name         = $name;
        $this->color        = $color;
        $this->engineSpecs = $engineSpecs;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEngineSpecs(): string
    {
        return $this->engineSpecs;
    }
}
