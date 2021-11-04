<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\JsonResponse;
use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ResponseInterface;
use PHPUnit\Framework\TestCase;

class JsonResponseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldBeAbleToConvertResponseToJsonString()
    {
        $fakeRender = ['message' => 'api response to json'];
        $apiMock = $this->getMockBuilder(ResponseInterface::class)
            ->setMethods(['render'])
            ->getMock();
        $apiMock
            ->expects($this->once())
            ->method('render')
            ->will($this->returnValue($fakeRender))
        ;
        $jsonRender = new JsonResponse($apiMock);
        $expected = '{"message":"api response to json"}';
        $this->assertEquals($expected, $jsonRender->render());
    }
}
