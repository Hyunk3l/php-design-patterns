<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\AbstractFactory;

use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\MercedesCarFactory;
use Hyunk3l\PhpDesignPatterns\Creational\AbstractFactory\AbstractCarFactory;

class MercedesCarFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of MercedesCarFactory.
     *
     * @var AbstractCarFactory
     */
    private $instance;

    /**
     * Setup configurations.
     */
    public function setUp()
    {
        $this->instance = new MercedesCarFactory();
    }

    /**
     * Testing sport car creation.
     */
    public function testSportCar()
    {
        $expected   = "Mercedes Sport car!\nName:A1 AMG\nColor:grey space\nEngine:3.0 300cv\n";
        $result     = (string) $this->instance->createSportCar("A1 AMG", "grey space", "3.0 300cv");
        $this->assertEquals($expected, $result, "The result is not the expected one.");
    }
}