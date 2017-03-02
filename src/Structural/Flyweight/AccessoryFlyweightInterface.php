<?php

namespace PhpDesignPatterns\Structural\Flyweight;

/**
 * Interface AccessoryFlyweightInterface
 * @package PhpDesignPatterns\Structural\Flyweight
 */
interface AccessoryFlyweightInterface
{
    /**
     * Get item price.
     *
     * @return mixed
     */
    public function getPrice();
}