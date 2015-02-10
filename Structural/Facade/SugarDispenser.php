<?php

namespace PhpDesignPatterns\Structural\Facade;

/**
 * Class SugarDispenser
 * @package PhpDesignPatterns\Structural\Facade
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