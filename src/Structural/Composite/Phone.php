<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Composite;

class Phone extends PhoneElement
{
    private $elements;

    public function build(): string
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

    public function add(PhoneElement $element): PhoneElement
    {
        $this->elements[] = $element;
        return $this;
    }

    public function remove(string $childKey): PhoneElement
    {
        if(!empty($this->elements[$childKey])) {
            unset($this->elements[$childKey]);
        }
        return $this;
    }
}