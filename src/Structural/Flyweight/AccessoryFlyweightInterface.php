<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

/**
 * Interface AccessoryFlyweightInterface
 * @package Hyunk3l\PhpDesignPatterns\Structural\Flyweight
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