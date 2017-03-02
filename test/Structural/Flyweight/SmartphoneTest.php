<?php

namespace PhpDesignPatterns\Tests\Structural\Flyweight;

use PhpDesignPatterns\Structural\Flyweight\Smartphone;

class SmartphoneTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of Smartphone.
     *
     * @var PhoneInterface
     */
    private $phone;

    /**
     * Setup each test case basic variables.
     */
    public function setUp()
    {
        $this->phone = new Smartphone;
    }

    /**
     * Destroy variables after each test case.
     */
    public function tearDown()
    {
        $this->phone = null;
    }

    /**
     * Test get basic phone price.
     */
    public function testGetBasicPrice()
    {
        $this->assertEquals(Smartphone::PHONE_PRICE, $this->phone->getBasicPrice());
    }

    /**
     * Test get accessories price when no accessories.
     */
    public function testGetAccessoriesPriceWhenNoAccessories()
    {
        $this->assertEquals(0.0, $this->phone->getAccessoriesPrice());
    }

    /**
     * Test get accessories price.
     */
    public function testGetAccessoriesPrice()
    {
        $mock_accessory = $this->getMock('\\PhpDesignPatterns\\Structural\\Flyweight\\AccessoryFlyweightInterface', array('getPrice'));
        $mock_accessory
            ->expects($this->exactly(2))
            ->method('getPrice')
            ->will($this->onConsecutiveCalls(20.00, 10.00))
        ;
        $this->phone->addAccessory($mock_accessory);
        $this->phone->addAccessory($mock_accessory);
        $this->assertEquals(30.0, $this->phone->getAccessoriesPrice());
    }

    /**
     * Test get total phone price.
     */
    public function testGetTotalPrice()
    {
        $mock_accessory = $this->getMock('\\PhpDesignPatterns\\Structural\\Flyweight\\AccessoryFlyweightInterface', array('getPrice'));
        $mock_accessory
            ->expects($this->exactly(2))
            ->method('getPrice')
            ->will($this->onConsecutiveCalls(20.00, 10.00))
        ;
        $this->phone->addAccessory($mock_accessory);
        $this->phone->addAccessory($mock_accessory);
        $this->assertEquals(Smartphone::PHONE_PRICE+30.0, $this->phone->getTotalPrice());
    }
}