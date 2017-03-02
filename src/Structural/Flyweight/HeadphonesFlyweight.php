<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

/**
 * Class HeadphonesFlyweight
 * @package Hyunk3l\PhpDesignPatterns\Structural\Flyweight
 */
class HeadphonesFlyweight implements AccessoryFlyweightInterface
{
    /**
     * Get item price.
     *
     * @return float
     */
    public function getPrice()
    {
        return 29.99;
    }
}