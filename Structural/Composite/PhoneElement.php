<?php

namespace PhpDesignPatterns\Structural\Composite;

/**
 * Class PhoneElement
 * @package PhpDesignPatterns\Structural\Composite
 */
abstract class PhoneElement
{
    /**
     * Builds an element.
     * @return string
     */
    abstract public function build();

    /**
     * @param PhoneElement $element Element to add.
     * @return PhoneElement
     */
    abstract public function add(PhoneElement $element);

    /**
     * Remove a PhoneElement child.
     *
     * @param mixed $child_key
     * @return PhoneElement
     */
    abstract public function remove($child_key);
}