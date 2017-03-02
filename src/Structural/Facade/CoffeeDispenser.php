<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

/**
 * Class CoffeeDispenser
 * @package Hyunk3l\PhpDesignPatterns\Structural\Facade
 */
Class CoffeeDispenser implements DispenserInterface
{
    /**
     * Get the product.
     *
     * @return string
     */
    public function getProduct()
    {
        return 'coffee: 10mg';
    }
}