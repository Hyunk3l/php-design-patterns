<?php

namespace PhpDesignPatterns\Tests\Structural\Decorator;

use PhpDesignPatterns\Structural\Decorator\JsonResponse;

/**
 * Class JsonResponseTest
 * @package PhpDesignPatterns\Tests\Structural\Decorator
 */
class JsonResponseTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test instance.
     *
     * @var JsonResponse
     */
    private $json_render;

    /**
     * Testing decorated render.
     */
    public function testRender()
    {
        $fake_render = array('message' => 'api response to json');
        $api_mock = $this->getMock('PhpDesignPatterns\\Structural\\Decorator\\ResponseInterface', array('render'));
        $api_mock
            ->expects($this->once())
            ->method('render')
            ->will($this->returnValue($fake_render))
        ;
        $this->json_render = new JsonResponse($api_mock);
        $expected = '{"message":"api response to json"}';
        $this->assertEquals($expected, $this->json_render->render());
    }
}