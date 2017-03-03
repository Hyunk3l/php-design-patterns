<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class Phone implements PhoneElement
{
    private $phoneElements;

    public function __construct(array $phoneElements)
    {

        $this->phoneElements = $phoneElements;
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