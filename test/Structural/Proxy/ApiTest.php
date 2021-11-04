<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Proxy;

use Hyunk3l\PhpDesignPatterns\Structural\Proxy\Api;
use PHPUnit\Framework\TestCase;

class ApiTest extends TestCase
{
    /**
     * @test
     */
    public function shouldPerformAnApiCallSuccessfully()
    {
        $expects = [
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => [
                'id'    => 1,
                'name'  => 'foo',
            ],
        ];
        $api = new Api();
        $this->assertEquals($expects, $api->doApiCall('localhost', [], 'GET'));
    }
}
