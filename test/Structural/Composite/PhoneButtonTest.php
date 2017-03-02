<?php

namespace Tests\Structural\Composite;

use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneButton;
use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneElement;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneButtonTest
 * @package Tests\Structural\Composite
 */
class PhoneButtonTest extends TestCase
{
    /**
     * PhoneButton instance for test.
     *
     * @var PhoneButton
     */
    private $phone_button;

    /**
     * Setup for each test case.
     */
    public function setUp()
    {
        $this->phone_button = new PhoneButton();
    }

    /**
     * Destroy test elements.
     */
    public function tearDown()
    {
        $this->phone_button = null;
    }

    /**
     * Testing phone button built.
     */
    public function testPhoneButtonBuild()
    {
        $this->assertEquals("This is a phone button.".PHP_EOL, $this->phone_button->build());
    }

    /**
     * Testing add child.
     */
    public function testAddChild()
    {
        $phone_element = $this->getMockBuilder(PhoneElement::class)
            ->setMethods(array("add", "remove", "build"))
            ->getMock();
        $this->assertInstanceOf(PhoneElement::class, $this->phone_button->add($phone_element));
    }

    /**
     * Testing remove child.
     */
    public function testRemoveChild()
    {
        $this->assertInstanceOf(PhoneElement::class, $this->phone_button->remove("just_a_key"));
    }
}