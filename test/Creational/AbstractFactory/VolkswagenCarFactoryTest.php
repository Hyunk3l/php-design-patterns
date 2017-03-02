<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\VolkswagenCarFactory;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\AbstractCarFactory;

class VolkswagenCarFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of VolkswagenCarFactory.
     *
     * @var AbstractCarFactory
     */
    private $instance;

    /**
     * Setup configurations.
     */
    public function setUp()
    {
        $this->instance = new VolkswagenCarFactory();
    }

    /**
     * Testing sport car creation.
     */
    public function testSportCar()
    {
        $expected   = "Volkswagen Sport car!\nName:Golf GTI\nColor:candy white\nEngine:3.0 200cv\n";
        $result     = (string) $this->instance->createSportCar("Golf GTI", "candy white", "3.0 200cv");
        $this->assertEquals($expected, $result, "The result is not the expected one.");
    }
}