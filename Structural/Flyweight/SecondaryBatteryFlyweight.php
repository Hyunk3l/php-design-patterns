<?php

namespace PhpDesignPatterns\Structural\Flyweight;

/**
 * Class SecondaryBatteryFlyweight
 * @package PhpDesignPatterns\Structural\Flyweight
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