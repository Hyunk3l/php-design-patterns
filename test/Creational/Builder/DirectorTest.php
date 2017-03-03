<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatchBuilder;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Hand;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Director;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\SportWatchBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateASportWatch()
    {
        $sportWatch = (new Director())->build(new SportWatchBuilder());
        $this->assertEquals(new Hand(), $sportWatch->getWatchComponents()['Seconds hand']);
    }
    /**
     * @test
     */
    public function shouldCreateAClassicWatch()
    {
        $classicWatch = (new Director())->build(new ClassicWatchBuilder());
        $this->assertEquals(new Hand(), $classicWatch->getWatchComponents()['Seconds hand']);
    }
}