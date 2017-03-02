<?php

namespace PhpDesignPatterns\Tests\Structural\Decorator;

use PhpDesignPatterns\Structural\Decorator\ApiResponse;

/**
 * Class ApiResponseTest
 * @package Tests\Structural\Decorator
 */
class ApiResponseTest extends \PHPUnit_Framework_TestCase
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