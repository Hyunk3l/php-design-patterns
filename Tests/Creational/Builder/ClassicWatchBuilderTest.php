<?php

namespace PhpDesignPatterns\Tests\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\ClassicWatchBuilder;

/**
 * Class ClassicWatchBuilderTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class ClassicWatchBuilderTest extends \PHPUnit_Framework_TestCase
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
    public function testInterfaceContract() {
        $this->assertInstanceOf('PhpDesignPatterns\Creational\Builder\WatchBuilderInterface', $this->builder);
    }

    /**
     * Testing watch creation.
     */
    public function testWatchCreation()
    {
        $this->builder->createWatch();
        $this->assertInstanceOf('PhpDesignPatterns\Creational\Builder\Watch', $this->builder->getWatch());
    }

    /**
     * Testing addBox method.
     */
    public function testAddBox()
    {
        $this->builder->createWatch();
        $this->builder->addBox();

        $expected = array("watch box" => $this->getMock("PhpDesignPatterns\\Creational\\Builder\\Components\\Box"));
        $this->assertInstanceOf('PhpDesignPatterns\Creational\Builder\Watch', $this->builder->getWatch());
    }
}