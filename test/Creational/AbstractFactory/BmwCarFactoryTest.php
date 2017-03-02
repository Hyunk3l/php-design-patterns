<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\BmwCarFactory;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\AbstractCarFactory;
use PHPUnit\Framework\TestCase;

class BmwCarFactoryTest extends TestCase
{
    /**
     * Instance of BmwCarFactory.
     *
     * @var AbstractCarFactory
     */
    private $instance;

    /**
     * Set up configurations.
     */
    public function setUp()
    {
        $this->instance = new BmwCarFactory();
    }

    /**
     * Testing sport car creation.
     */
    public function testSportCar()
    {
        $expected   = "BMW Sport car!\nName:i7\nColor:red\nEngine:3.0 TDI\n";
        $result     = (string) $this->instance->createSportCar("i7", "red", "3.0 TDI");
        $this->assertEquals($expected, $result, "The result is not the expected one.");
    }
}