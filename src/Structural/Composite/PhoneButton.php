<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class PhoneButton implements PhoneElement
{
    private $price;

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): PhoneElement
    {
        $this->price = $price;
        return $this;
    }
}
