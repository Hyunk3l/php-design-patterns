<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

abstract class BaseCar implements CarInterface
{
    public function __construct(
        private string $name,
        private string $color,
        private string $engineSpecs
    ) {
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
