<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class CoffeeDispenser implements Dispenser
{
    public function getProduct(): string
    {
        return 'coffee: 10mg';
    }
}
