<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Proxy;

class ApiProxy extends Api
{
    private ?Api $wrapper = null;

    public function doApiCall(string $url, array $data, string $method): array
    {
        $this->init();
        return $this->wrapper->doApiCall($url, $data, $method);
    }

    private function init()
    {
        if ($this->wrapper == null) {
            $this->wrapper = new Api();
        }
    }
}
