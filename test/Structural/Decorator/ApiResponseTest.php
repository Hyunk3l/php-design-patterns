<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Decorator;

use Hyunk3l\PhpDesignPatterns\Structural\Decorator\ApiResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class ApiResponseTest
 * @package Tests\Structural\Decorator
 */
class ApiResponseTest extends TestCase
{
    /**
     * Instance needed for testing.
     *
     * @var ApiResponse
     */
    private $api_response;

    /**
     * Testing render.
     */
    public function testRender()
    {
        $expected   = array(
            'status'    => 'ok',
            'message'   =>  'raw api response',
        );
        $this->api_response = new ApiResponse();
        $this->assertEquals($expected, $this->api_response->render(), 'The result is not the expected one.');
    }
}
