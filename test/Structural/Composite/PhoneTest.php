<?php

namespace Tests\Structural\Composite;

use Hyunk3l\PhpDesignPatterns\Structural\Composite\Phone;
use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneButton;
use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneDisplay;
use PHPUnit\Framework\TestCase;

class PhoneTest extends TestCase
{
    /**
     * @test
     */
    public function shouldGetPhonePrice()
    {
        $phone = new Phone(
            [
                (new PhoneDisplay())->setPrice(50.00),
                (new PhoneButton())->setPrice(5.00),
                (new PhoneButton())->setPrice(2.00),
                (new PhoneButton())->setPrice(4.00),
                (new PhoneButton())->setPrice(10.00),
            ]
        );

        $this->assertEquals(71.00, $phone->getPrice());
    }
}
