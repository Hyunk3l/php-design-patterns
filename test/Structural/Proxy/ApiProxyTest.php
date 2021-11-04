<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Proxy;

use Hyunk3l\PhpDesignPatterns\Structural\Proxy\ApiProxy;
use PHPUnit\Framework\TestCase;

class ApiProxyTest extends TestCase
{
    /**
     * @test
     */
    public function shouldPerformAnApiCall()
    {
        $expects = [
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => [
                'id'    => 1,
                'name'  => 'foo',
            ],
        ];

        $response = (new ApiProxy())->doApiCall('localhost', [], 'GET');

        $this->assertEquals($expects, $response);
    }
}
