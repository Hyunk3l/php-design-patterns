<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class PhoneButton extends PhoneElement
{
    public function build(): string
    {
        return "This is a phone button.".PHP_EOL;
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