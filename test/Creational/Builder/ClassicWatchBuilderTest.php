<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatchBuilder;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Hand;
use PHPUnit\Framework\TestCase;

class ClassicWatchBuilderTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateAClassicWatch()
    {
        $classicWatch = (new ClassicWatchBuilder())
            ->createWatch()
            ->addBox()
            ->addHands()
            ->addBands()
            ->addMovements()
            ->getWatch()
        ;
        $this->assertEquals(new Hand(), $classicWatch->getWatchComponents()["Seconds hand"]);
    }
}