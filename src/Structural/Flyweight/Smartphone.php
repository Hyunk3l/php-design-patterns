<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

/**
 * Class Smartphone
 * @package Hyunk3l\PhpDesignPatterns\Structural\Flyweight
 */
class Smartphone implements PhoneInterface
{
    /**
     * Phone price.
     *
     * @var float
     */
    const PHONE_PRICE = 399.90;

    /**
     * Accessories default price.
     *
     * @var float
     */
    const NO_ACCESSORIES_PRICE = 0.0;

    /**
     * List of accessories.
     *
     * @var array
     */
    private $accessories;

    /**
     * Get phone basic price.
     *
     * @return float
     */
    public function getBasicPrice()
    {
        return static::PHONE_PRICE;
    }

    /**
     * Get accessories price.
     *
     * @return float
     */
    public function getAccessoriesPrice()
    {
        $accessories_price = static::NO_ACCESSORIES_PRICE;
        if(empty($this->accessories)) {
            return $accessories_price;
        }
        foreach($this->accessories as $accessory) {
            $accessories_price += $accessory->getPrice();
        }
        return $accessories_price;
    }

    /**
     * Add accessory.
     *
     * @param AccessoryFlyweightInterface $accessory
     * @return PhoneInterface
     */
    public function addAccessory(AccessoryFlyweightInterface $accessory)
    {
        $this->accessories[] = $accessory;
        return $this;
    }

    /**
     * Get total phone price.
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->getBasicPrice() + $this->getAccessoriesPrice();
    }
}