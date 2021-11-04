<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\JsonResponse;
use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ResponseInterface;
use PHPUnit\Framework\TestCase;

class JsonResponseTest extends TestCase
{
    private JsonResponse $jsonRender;

    /**
     * @test
     */
    public function testRender()
    {
        $fakeRender = ['message' => 'api response to json'];
        $apiMock = $this->getMockBuilder(ResponseInterface::class)
            ->setMethods(array('render'))
            ->getMock();
        $apiMock
            ->expects($this->once())
            ->method('render')
            ->will($this->returnValue($fakeRender))
        ;
        $this->jsonRender = new JsonResponse($apiMock);
        $expected = '{"message":"api response to json"}';
        $this->assertEquals($expected, $this->jsonRender->render());
    }
}
