<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\JsonResponse;
use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ResponseInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class JsonResponseTest
 * @package PhpDesignPatterns\Tests\Structural\Decorator
 */
class JsonResponseTest extends TestCase
{
    /**
     * Test volkswagenCarFactory.
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
        $api_mock = $this->getMockBuilder(ResponseInterface::class)
            ->setMethods(array('render'))
            ->getMock();
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
