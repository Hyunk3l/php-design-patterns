<?php

namespace PhpDesignPatterns\Creational\AbstractFactory;

interface CarInterface
{
    public function getName();

    public function getColor();

    public function getEngineSpecs();

    public function __toString();
}