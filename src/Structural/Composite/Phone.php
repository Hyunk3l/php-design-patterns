<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class Phone implements PhoneElement
{
    public function __construct(private array $phoneElements)
    {
    }

    public function getPrice(): float
    {
        $totalPrice = 0;
        foreach ($this->phoneElements as $phoneElement) {
            $totalPrice += $phoneElement->getPrice();
        }
        return $totalPrice;
    }
}
