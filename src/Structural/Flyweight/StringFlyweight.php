<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

class StringFlyweight implements FlyweightInterface
{
    public function __construct(private string $phrase)
    {
    }

    public function render(): string
    {
        return $this->phrase;
    }
}
