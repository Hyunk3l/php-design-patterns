<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\ClassicWatchBuilder;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Box;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Watch;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\WatchBuilderInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ClassicWatchBuilderTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class ClassicWatchBuilderTest extends TestCase
{
    /**
     * Instance of ClassicWatchBuilder class.
     *
     * @var ClassicWatchBuilder
     */
    private $builder;

    /**
     * Initial tests configurations.
     */
    public function setUp()
    {
        $this->builder = new ClassicWatchBuilder();
    }

    /**
     * Destroy items.
     */
    public function tearDown()
    {
        $this->builder = null;
    }

    /**
     * Testing interface contract.
     */
    public function testInterfaceContract()
    {
        $this->assertInstanceOf(WatchBuilderInterface::class, $this->builder);
    }

    /**
     * Testing watch creation.
     */
    public function testWatchCreation()
    {
        $this->builder->createWatch();
        $this->assertInstanceOf(Watch::class, $this->builder->getWatch());
    }

    /**
     * Testing addBox method.
     */
    public function testAddBox()
    {
        $this->builder->createWatch();
        $this->builder->addBox();

        $this->assertInstanceOf(Watch::class, $this->builder->getWatch());
    }

    /**
     * Testing addHands method.
     */
    public function testAddHands()
    {
        $this->builder->createWatch();
        $this->builder->addHands();

        $this->assertInstanceOf(Watch::class, $this->builder->getWatch());
    }
}