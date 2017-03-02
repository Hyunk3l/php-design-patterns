<?php

namespace PhpDesignPatterns\Structural\Facade;

/**
 * Interface DispenserInterface
 * @package PhpDesignPatterns\Structural\Facade
 */
interface DispenserInterface
{
    /**
     * Get the dispenser product.
     *
     * @return mixed
     */
    public function getProduct();
}