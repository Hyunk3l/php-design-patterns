<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class SugarDispenser implements Dispenser
{
    public function getProduct(): string
    {
        return 'sugar: 3mg';
    }
}
