<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Hand;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\SportWatchBuilder;
use PHPUnit\Framework\TestCase;

class SportWatchBuilderTest extends TestCase
{

    public function testShouldCreateASportWatch()
    {
        $watch = (new SportWatchBuilder())
            ->createWatch()
            ->addBox()
            ->addBands()
            ->addMovements()
            ->addHands()
            ->getWatch();
        $this->assertEquals(new Hand(), $watch->getWatchComponents()['Seconds hand']);
    }
}
