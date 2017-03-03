<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class PhoneDisplay extends PhoneElement
{
    public function build(): string
    {
        return "This is a phone display.".PHP_EOL;
    }

    public function add(PhoneElement $element): PhoneElement
    {
        return $this;
    }
   public function remove(string $childKey): PhoneElement
    {
        return $this;
    }
}