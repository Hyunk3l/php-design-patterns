<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\PhpDesignPatterns\Structural\Flyweight\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightFactoryTest extends TestCase
{
    /**
     * @test
     */
    public function shouldHaveEmptyFlyweightsPool()
    {
        $this->assertEquals(0, (new FlyweightFactory())->count());
    }

    /**
     * @test
     */
    public function shouldCreateOneStringFlyweight()
    {
        $flyweightFactory = new FlyweightFactory();

        $expected = "hello world";
        $stringFlyweight = $flyweightFactory->get($expected);

        $this->assertEquals(1, $flyweightFactory->count());
        $this->assertEquals($expected, $stringFlyweight->render());
    }

    /**
     * @test
     */
    public function shouldCountOneIfSameStringIsGotTwice()
    {
        $flyweightFactory = new FlyweightFactory();
        $expected = "hello world";

        $stringFlyweight = $flyweightFactory->get($expected);
        $duplicateStringFlyweight = $flyweightFactory->get($expected);

        $this->assertEquals(1, $flyweightFactory->count());
        $this->assertEquals($expected, $stringFlyweight->render());
        $this->assertEquals($expected, $duplicateStringFlyweight->render());
    }

    /**
     * @test
     */
    public function shouldCountFourWhenShouldCreateOnlyForFlyweights()
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
