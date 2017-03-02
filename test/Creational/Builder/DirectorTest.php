<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Director;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\WatchBuilderInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class DirectorTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class DirectorTest extends TestCase
{
    /**
     * Instance of Director class.
     *
     * @var Director
     */
    private $director;

    public function testBuild()
    {
        $methods = array(
            'createWatch',
            'addMovements',
            'addHands',
            'addBox',
            'addBands',
            'getWatch',
            'setWatch',
        );
        $mocked_builder = $this->getMockBuilder(WatchBuilderInterface::class)
            ->disableOriginalConstructor()
            ->setMethods($methods)
            ->getMock();
        $mocked_builder->expects($this->once())->method('createWatch')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addMovements')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addHands')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addBox')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addBands')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->never())->method('setWatch')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('getWatch')->will($this->returnValue(new \stdClass()));

        $this->director = new Director();
        $result = $this->director->build($mocked_builder);
        $this->assertInstanceOf("stdClass", $result, 'The result has not the expected bmwCarFactory.');
    }
}