<?php

namespace PhpDesignPatterns\Structural\Facade;

/**
 * Class CoffeeDispenser
 * @package PhpDesignPatterns\Structural\Facade
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