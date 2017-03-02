<?php

namespace Tests\Structural\Composite;

use Hyunk3l\PhpDesignPatterns\Structural\Composite\Phone;
use Hyunk3l\PhpDesignPatterns\Structural\Composite\PhoneElement;
use PHPUnit\Framework\TestCase;

/**
 * Class PhoneTest
 * @package Tests\Structural\Composite
 */
class PhoneTest extends TestCase
{
    /**
     * Phone instance for test.
     *
     * @var Phone
     */
    private $phone;

    /**
     * Setup for each test case.
     */
    public function setUp()
    {
        $this->phone = new Phone();
    }

    /**
     * Destroy test elements.
     */
    public function tearDown()
    {
        $this->phone = null;
    }

    /**
     * Test a phone without children.
     */
    public function testEmptyPhone()
    {
        $this->assertEmpty($this->phone->build(), 'The result is not the expected one.');
    }

    /**
     * Testing build a phone having children.
     */
    public function testNotEmptyPhone()
    {
        $methods        = array(
            'add',
            'remove',
            'build',
        );
        $display_mock = $this->getMockBuilder(PhoneElement::class)->setMethods($methods)->getMock();
        $display_mock
            ->expects($this->once())
            ->method("build")
            ->will($this->returnValue("This is a mocked display.".PHP_EOL))
        ;
        $button_mock = $this->getMockBuilder(PhoneElement::class)
            ->setMethods($methods)
            ->getMock();
        $button_mock
            ->expects($this->once())
            ->method("build")
            ->will($this->returnValue("This is a mocked button.".PHP_EOL))
        ;
        $this->phone->add($display_mock);
        $this->phone->add($button_mock);
        $result = $this->phone->build();
        $expected = "This is a mocked display.".PHP_EOL."This is a mocked button.".PHP_EOL;
        $this->assertEquals($expected, $result);
    }

    /**
     * Testing build a phone but removing children.
     */
    public function testRemoveChildrenFromPhone()
    {
        $methods        = array(
            'add',
            'remove',
            'build',
        );
        $display_mock = $this->getMockBuilder(PhoneElement::class)->setMethods($methods)->getMock();
        $display_mock
            ->expects($this->once())
            ->method("build")
            ->will($this->returnValue("This is a mocked display.".PHP_EOL))
        ;
        $button_mock = $this->getMockBuilder(PhoneElement::class)->setMethods($methods)->getMock();
        $button_mock
            ->expects($this->never())
            ->method("build")
        ;
        $this->phone->add($display_mock);
        $this->phone->add($button_mock);
        $this->phone->remove(1);
        $result = $this->phone->build();
        $expected = "This is a mocked display.".PHP_EOL;
        $this->assertEquals($expected, $result);
    }

    /**
     * Testing build a phone but removing a non existing child.
     */
    public function testRemoveNotExistingChild()
    {
        $methods        = array(
            'add',
            'remove',
            'build',
        );
        $display_mock = $this->getMockBuilder(PhoneElement::class)
            ->disableOriginalConstructor()
            ->setMethods($methods)
            ->getMock();
        $display_mock
            ->expects($this->once())
            ->method("build")
            ->will($this->returnValue("This is a mocked display.".PHP_EOL))
        ;
        $button_mock = $this->getMockBuilder(PhoneElement::class)
            ->setMethods($methods)
            ->getMock();
        $button_mock
            ->expects($this->once())
            ->method("build")
            ->will($this->returnValue("This is a mocked button.".PHP_EOL))
        ;
        $this->phone->add($display_mock);
        $this->phone->add($button_mock);
        $this->phone->remove(2);
        $result = $this->phone->build();
        $expected = "This is a mocked display.".PHP_EOL."This is a mocked button.".PHP_EOL;
        $this->assertEquals($expected, $result);
    }
}