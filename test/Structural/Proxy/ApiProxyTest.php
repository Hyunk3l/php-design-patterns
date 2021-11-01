<?php

namespace Hyunk3l\Test\PhpDesignPatterns\Structural\Proxy;

use Hyunk3l\PhpDesignPatterns\Structural\Proxy\ApiProxy;
use PHPUnit\Framework\TestCase;

/**
 * Class ApiProxyTest
 * @package PhpDesignPatterns\Tests\Structural\Proxy
 */
class ApiProxyTest extends TestCase
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
        $api = new ApiProxy();
        $this->assertEquals($expects, $api->doApiCall('localhost', array(), 'GET'));
    }
}
