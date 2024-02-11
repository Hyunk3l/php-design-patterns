<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\PhpDesignPatterns\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightFactoryTest extends TestCase
{

    public function testShouldHaveEmptyFlyweightsPool()
    {
        $this->assertEquals(0, (new FlyweightFactory())->count());
    }


    public function testShouldCreateOneStringFlyweight()
    {
        $flyweightFactory = new FlyweightFactory();

        $expected = "hello world";
        $stringFlyweight = $flyweightFactory->get($expected);

        $this->assertEquals(1, $flyweightFactory->count());
        $this->assertEquals($expected, $stringFlyweight->render());
    }


    public function testShouldCountOneIfSameStringIsGotTwice()
    {
        $flyweightFactory = new FlyweightFactory();
        $expected = "hello world";

        $stringFlyweight = $flyweightFactory->get($expected);
        $duplicateStringFlyweight = $flyweightFactory->get($expected);

        $this->assertEquals(1, $flyweightFactory->count());
        $this->assertEquals($expected, $stringFlyweight->render());
        $this->assertEquals($expected, $duplicateStringFlyweight->render());
    }


    public function testShouldCountFourWhenShouldCreateOnlyForFlyweights()
    {
        $flyweightFactory = new FlyweightFactory();
        $stringFlyweights = [
            "hello world 1",
            "hello world 1",
            "hello world 1",
            "hello world 2",
            "hello world 2",
            "hello world 2",
            "hello world 3",
            "hello world 3",
            "hello world 3",
            "hello world 4",
            "hello world 4",
            "hello world 4",
        ];

        foreach ($stringFlyweights as $stringFlyweight) {
            $flyweightFactory->get($stringFlyweight);
        }

        $this->assertEquals(4, $flyweightFactory->count());
    }
}
