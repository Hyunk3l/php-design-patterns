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
        $expected = '{"message":"api response to json"}';
        $fakeRender = ['message' => 'api response to json'];
        $apiMock = $this->getMockBuilder(ResponseInterface::class)
            ->onlyMethods(['render'])
            ->getMock();
        $apiMock
            ->expects($this->once())
            ->method('render')
            ->willReturn($fakeRender)
        ;

        $result = (new JsonResponse($apiMock))->render();

        $this->assertEquals($expected, $result);
    }
}
