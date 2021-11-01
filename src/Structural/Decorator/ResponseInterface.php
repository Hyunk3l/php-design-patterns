<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

/**
 * Interface ResponseInterface
 * @package Hyunk3l\PhpDesignPatterns\Structural\Decorator
 */
interface ResponseInterface
{
    /**
     * Return rendered output.
     *
     * @return mixed
     */
    public function render();
}
