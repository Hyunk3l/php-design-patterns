<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ApiResponse;
use PHPUnit\Framework\TestCase;

class ApiResponseTest extends TestCase
{

    public function testShouldReturnARawApiResponse()
    {
        $expected = [
            'status' => 'ok',
            'message' => 'raw api response',
        ];

        $response = (new ApiResponse())->render();

        $this->assertEquals($expected, $response);
    }
}
