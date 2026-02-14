<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class WaterDispenser implements Dispenser
{
    public function getProduct(): string
    {
        return 'water: 5ml';
    }
}
