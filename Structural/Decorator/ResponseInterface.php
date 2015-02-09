<?php

namespace PhpDesignPatterns\Structural\Decorator;

/**
 * Interface ResponseInterface
 * @package PhpDesignPatterns\Structural\Decorator
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