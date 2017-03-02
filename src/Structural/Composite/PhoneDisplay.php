<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

/**
 * Class PhoneDisplay
 * @package Hyunk3l\PhpDesignPatterns\Structural\Composite
 */
class PhoneDisplay extends PhoneElement
{
    /**
     * Build a phone display.
     *
     * @return string
     */
    public function build()
    {
        return "This is a phone display.".PHP_EOL;
    }

    /**
     * Add a PhoneElement child.
     *
     * @param PhoneElement $element
     * @return PhoneDisplay
     */
    public function add(PhoneElement $element)
    {
        return $this;
    }

    /**
     * Removes a child.
     *
     * @param mixed $child_key
     * @return PhoneDisplay
     */
    public function remove($child_key)
    {
        return $this;
    }
}