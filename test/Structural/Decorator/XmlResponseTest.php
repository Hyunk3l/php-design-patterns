<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ResponseInterface;
use Hyunk3l\PhpDesignPatterns\Structural\Decorator\XmlResponse;
use PHPUnit\Framework\TestCase;

class XmlResponseTest extends TestCase
{

    public function testShouldBeAbleToConvertResponseToXml()
    {
        $expected = <<<XML
<?xml version="1.0"?>
<root><message>api response to xml</message></root>\n
XML;
        $fakeRenderer = ['message' => 'api response to xml'];
        $apiMock = $this->getMockBuilder(ResponseInterface::class)
            ->onlyMethods(['render'])
            ->getMock();
        $apiMock
            ->expects($this->once())
            ->method('render')
            ->willReturn($fakeRenderer);

        $response = (new XmlResponse($apiMock))->render();

        $this->assertEquals($expected, $response);
    }
}
