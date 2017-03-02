<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Proxy;

use Hyunk3l\PhpDesignPatterns\Structural\Proxy\Api;

/**
 * Class ApiTest
 * @package PhpDesignPatterns\Tests\Structural\Proxy
 */
class ApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing doApiCall.
     */
    public function testDoApiCall()
    {
        $expects = array(
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => array(
                'id'    => 1,
                'name'  => 'foo',
            ),
        );
        $api = new Api();
        $this->assertEquals($expects, $api->doApiCall('localhost', array(), 'GET'));
    }
}