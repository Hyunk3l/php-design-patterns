<?php

namespace PhpDesignPatterns\Structural\Proxy;

/**
 * Class Api
 * @package PhpDesignPatterns\Structural\Proxy
 */
class Api
{
    /**
     * Just a fake api call method.
     *
     * @param string $url
     * @param array $data
     * @param string $method
     * @return array
     */
    public function doApiCall($url, array $data, $method)
    {
        // Implement dummy api call.
        return array(
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => array(
                'id'    => 1,
                'name'  => 'foo',
            ),
        );
    }
}