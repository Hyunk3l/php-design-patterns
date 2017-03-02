<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

/**
 * Class SugarDispenser
 * @package Hyunk3l\PhpDesignPatterns\Structural\Facade
 */
Class SugarDispenser implements DispenserInterface
{
    /**
     * Get the product.
     *
     * @return string
     */
    public function getProduct()
    {
        return 'sugar: 3mg';
    }
}