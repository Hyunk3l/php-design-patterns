<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Proxy;

/**
 * Class ApiProxy
 * @package Hyunk3l\PhpDesignPatterns\Structural\Proxy
 */
class ApiProxy extends Api
{
    /**
     * Instance of Api.
     *
     * @var Api
     */
    private $wrapper;

    /**
     * Do api call using proxied object.
     *
     * @param string $url
     * @param array $data
     * @param string $method
     * @return array
     */
    public function doApiCall($url, array $data, $method)
    {
        $this->init();
        return $this->wrapper->doApiCall($url, $data, $method);
    }

    /**
     * Initialize the proxied object.
     */
    private function init()
    {
        if(!$this->wrapper) {
            $this->wrapper = new Api;
        }
    }
}