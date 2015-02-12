<?php

namespace PhpDesignPatterns\Structural\Flyweight;

/**
 * Class HeadphonesFlyweight
 * @package PhpDesignPatterns\Structural\Flyweight
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