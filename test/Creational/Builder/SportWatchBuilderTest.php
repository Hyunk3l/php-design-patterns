<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\SportWatchBuilder;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Watch;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\WatchBuilderInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class SportWatchBuilderTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class SportWatchBuilderTest extends TestCase
{
    /**
     * Instance of SportWatchBuilder class.
     *
     * @var SportWatchBuilder
     */
    private $builder;

    /**
     * Initial tests configurations.
     */
    public function setUp()
    {
        $this->builder = new SportWatchBuilder();
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
    public function testInterfaceContract() {
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
}