<?php

namespace PhpDesignPatterns\Structural\Composite;

/**
 * Class PhoneButton
 * @package PhpDesignPatterns\Structural\Composite
 */
class PhoneButton extends PhoneElement
{
    /**
     * Build a phone button.
     *
     * @return string
     */
    public function build()
    {
        return "This is a phone button.".PHP_EOL;
    }

    /**
     * Add a PhoneElement child.
     *
     * @param PhoneElement $element
     * @return PhoneButton
     */
    public function add(PhoneElement $element)
    {
        return $this;
    }

    /**
     * Removes a child.
     *
     * @param mixed $child_key
     * @return PhoneButton
     */
    public function remove($child_key)
    {
        return $this;
    }
}