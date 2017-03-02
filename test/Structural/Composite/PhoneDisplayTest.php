<?php

namespace Tests\Structural\Composite;

use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneDisplay;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneDisplayTest
 * @package Tests\Structural\Composite
 */
class PhoneDisplayTest extends TestCase
{
    /**
     * PhoneDisplay instance for test.
     *
     * @var PhoneDisplay
     */
    private $phone_display;

    /**
     * Setup for each test case.
     */
    public function setUp()
    {
        $this->phone_display = new PhoneDisplay();
    }

    /**
     * Destroy test elements.
     */
    public function tearDown()
    {
        $this->phone_display = null;
    }

    /**
     * Testing phone display built.
     */
    public function testPhoneDisplayBuild()
    {
        $this->assertEquals("This is a phone display.".PHP_EOL, $this->phone_display->build());
    }

    /**
     * Testing add child.
     */
    public function testAddChild()
    {
        $expected_instance = "PhpDesignPatterns\\Structural\\Composite\\PhoneElement";
        $phone_element = $this->getMock($expected_instance, array("add", "remove", "build"));
        $this->assertInstanceOf($expected_instance, $this->phone_display->add($phone_element));
    }

    /**
     * Testing remove child.
     */
    public function testRemoveChild()
    {
        $expected_instance = "PhpDesignPatterns\\Structural\\Composite\\PhoneElement";
        $this->assertInstanceOf($expected_instance, $this->phone_display->remove("just_a_key"));
    }
}