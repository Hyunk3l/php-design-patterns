<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ResponseInterface;
use Hyunk3l\PhpDesignPatterns\Structural\Decorator\XmlResponse;
use PHPUnit\Framework\TestCase;

class XmlResponseTest extends TestCase
{
    private XmlResponse $xmlRender;

    /**
     * @test
     */
    public function shouldBeAbleToConvertResponseToXml()
    {
        $fake_render = array('message' => 'api response to xml');
        $api_mock = $this->getMockBuilder(ResponseInterface::class)
            ->setMethods(array('render'))
            ->getMock();
        $api_mock
            ->expects($this->once())
            ->method('render')
            ->will($this->returnValue($fake_render))
        ;
        $this->xml_render = new XmlResponse($api_mock);
        $expected = <<<XML
<?xml version="1.0"?>
<root><message>api response to xml</message></root>\n
XML;
        $this->assertEquals($expected, $this->xml_render->render());
    }
}
