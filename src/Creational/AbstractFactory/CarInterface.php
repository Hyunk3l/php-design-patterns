<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

interface CarInterface
{
    public function getName(): string;

    public function getColor(): string;

    public function getEngineSpecs(): string;
}
