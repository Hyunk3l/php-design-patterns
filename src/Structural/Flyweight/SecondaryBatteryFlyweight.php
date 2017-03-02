<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

/**
 * Class SecondaryBatteryFlyweight
 * @package Hyunk3l\PhpDesignPatterns\Structural\Flyweight
 */
class SecondaryBatteryFlyweight implements AccessoryFlyweightInterface
{
    /**
     * Get item price.
     *
     * @return float
     */
    public function getPrice()
    {
        return 14.99;
    }
}