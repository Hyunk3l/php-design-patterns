<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

/**
 * Class WaterDispenser
 * @package Hyunk3l\PhpDesignPatterns\Structural\Facade
 */
Class WaterDispenser implements DispenserInterface
{
    /**
     * Get the product.
     *
     * @return string
     */
    public function getProduct()
    {
        return 'water: 5ml';
    }
}