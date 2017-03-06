<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

Class CoffeeDispenser implements DispenserInterface
{
    public function getProduct(): string
    {
        return 'coffee: 10mg';
    }
}