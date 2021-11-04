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
            'status' => 200,
            'message' => 'Api call performed successfully.',
            'data' => [
                'id' => 1,
                'name' => 'foo',
            ],
        ];

        $response = (new Api())->doApiCall('localhost', [], 'GET');

        $this->assertEquals($expects, $response);
    }
}
