<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ApiResponse;
use PHPUnit\Framework\TestCase;

class ApiResponseTest extends TestCase
{
    private ApiResponse $apiResponse;

    /**
     * @test
     */
    public function testRender()
    {
        $expected   = [
            'status'    => 'ok',
            'message'   =>  'raw api response',
        ];
        $this->apiResponse = new ApiResponse();
        $this->assertEquals($expected, $this->apiResponse->render(), 'The result is not the expected one.');
    }
}
