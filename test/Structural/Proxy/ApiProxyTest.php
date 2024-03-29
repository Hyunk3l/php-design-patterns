<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Proxy;

use Hyunk3l\PhpDesignPatterns\Structural\Proxy\ApiProxy;
use Hyunk3l\PhpDesignPatterns\Structural\Proxy\Api;
use PHPUnit\Framework\TestCase;

class ApiProxyTest extends TestCase
{
    public function testShouldPerformAnApiCall()
    {
        $expects = [
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => [
                'id'    => 1,
                'name'  => 'foo',
            ],
        ];

        $response = (new ApiProxy(wrapper: new Api()))->doApiCall('localhost', [], 'GET');

        $this->assertEquals($expects, $response);
    }

    public function testShouldFailInCaseApiIsNotDefined()
    {
        $response = (new ApiProxy(wrapper: null))->doApiCall('localhost', [], 'GET');

        $this->assertNull($response);
    }
}
