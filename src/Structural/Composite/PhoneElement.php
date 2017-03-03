<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

abstract class PhoneElement
{
    abstract public function build(): string;

    abstract public function add(PhoneElement $element): self;

    abstract public function remove(string $childKey): self;
}