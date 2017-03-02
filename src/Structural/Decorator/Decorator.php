<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

/**
 * Abstract class Decorator
 *
 * Provides basic methods for Concrete Decorators.
 *
 * @package Hyunk3l\PhpDesignPatterns\Structural\Decorator
 */
abstract class Decorator implements ResponseInterface
{
    /**
     * Instance of ResponseInterface.
     *
     * @var ResponseInterface
     */
    protected $wrapper;

    /**
     *
     * @param ResponseInterface $response The object we need to extend responsabilities to.
     */
    public function __construct(ResponseInterface $response)
    {
        $this->wrapper = $response;
    }
}