<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight\FlyweightInterface;

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