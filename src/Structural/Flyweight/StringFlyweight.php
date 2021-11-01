<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

class StringFlyweight implements FlyweightInterface
{
    private $phrase;

    public function __construct(string $phrase)
    {
        $this->phrase = $phrase;
    }

    public function render(): string
    {
        return $this->phrase;
    }
}
