<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory;

interface CarInterface
{
    public function getName(): string;

    public function getColor(): string;

    public function getEngineSpecs(): string;

    public function __toString(): string;
}
