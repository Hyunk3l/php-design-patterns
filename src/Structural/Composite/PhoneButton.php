<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class PhoneButton implements PhoneElement
{
    private float $price;

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
