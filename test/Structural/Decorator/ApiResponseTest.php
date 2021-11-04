<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ApiResponse;
use PHPUnit\Framework\TestCase;

class ApiResponseTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnARawApiResponse()
    {
        $expected   = [
            'status'    => 'ok',
            'message'   =>  'raw api response',
        ];
        $apiResponse = new ApiResponse();
        $this->assertEquals($expected, $apiResponse->render(), 'The result is not the expected one.');
    }
}
