<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class SugarDispenser implements DispenserInterface
{
    public function getProduct(): string
    {
        return 'sugar: 3mg';
    }
}
