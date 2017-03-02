<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

/**
 * Interface PhoneInterface
 * @package Hyunk3l\PhpDesignPatterns\Structural\Flyweight
 */
interface PhoneInterface
{
    /**
     * Get the basic item price.
     *
     * @return mixed
     */
    public function getBasicPrice();

    /**
     * Get total item + accessories price.
     *
     * @return mixed
     */
    public function getTotalPrice();

    /**
     * Add an accessory.
     *
     * @param AccessoryFlyweightInterface $accessory
     * @return PhoneInterface
     */
    public function addAccessory(AccessoryFlyweightInterface $accessory);

    /**
     * Get accessories price.
     *
     * @return mixed
     */
    public function getAccessoriesPrice();
}