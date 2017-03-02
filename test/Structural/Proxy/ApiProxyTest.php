<?php

namespace PhpDesignPatterns\Tests\Structural\Proxy;

use PhpDesignPatterns\Structural\Proxy\ApiProxy;

/**
 * Class ApiProxyTest
 * @package PhpDesignPatterns\Tests\Structural\Proxy
 */
class ApiProxyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test doApiCall.
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
        $api = new ApiProxy;
        $this->assertEquals($expects, $api->doApiCall('localhost', array(), 'GET'));
    }
}