<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

abstract class Decorator implements ResponseInterface
{
    public function __construct(protected ResponseInterface $wrapper)
    {
    }
}
