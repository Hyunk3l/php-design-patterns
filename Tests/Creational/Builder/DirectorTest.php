<?php

namespace PhpDesignPatterns\Tests\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\Director;

/**
 * Class DirectorTest
 * @package PhpDesignPatterns\Tests\Creational\Builder
 */
class DirectorTest extends \PHPUnit_Framework_TestCase
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
        $mocked_builder = $this->getMock('PhpDesignPatterns\Creational\Builder\WatchBuilderInterface', $methods);
        $mocked_builder->expects($this->once())->method('createWatch')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addMovements')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addHands')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addBox')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('addBands')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->never())->method('setWatch')->will($this->returnValue($mocked_builder));
        $mocked_builder->expects($this->once())->method('getWatch')->will($this->returnValue(new \stdClass()));

        $this->director = new Director();
        $result = $this->director->build($mocked_builder);
        $this->assertInstanceOf("stdClass", $result, 'The result has not the expected instance.');
    }
}