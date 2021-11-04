<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class WaterDispenser implements DispenserInterface
{
    public function getProduct(): string
    {
        return 'water: 5ml';
    }
}
