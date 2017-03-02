<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

/**
 * Class Phone (Composite object).
 * @package Hyunk3l\PhpDesignPatterns\Structural\Composite
 */
class Phone extends PhoneElement
{
    /**
     * List of PhoneElement.
     *
     * @var array of PhoneElement
     */
    private $elements;

    /**
     * Build a phone.
     *
     * @return string
     */
    public function build()
    {
        $phone = "";
        if(empty($this->elements)) {
            return $phone;
        }

        foreach($this->elements as $element)
        {
            $phone .= $element->build();
        }
        return $phone;
    }

    /**
     * Add a PhoneElement child.
     *
     * @param PhoneElement $element
     * @return PhoneDisplay
     */
    public function add(PhoneElement $element)
    {
        $this->elements[] = $element;
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
        if(!empty($this->elements[$child_key])) {
            unset($this->elements[$child_key]);
        }
        return $this;
    }
}