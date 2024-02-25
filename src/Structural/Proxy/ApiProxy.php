<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Proxy;

class ApiProxy extends Api
{
    public function __construct(private ?Api $wrapper) {}

    public function doApiCall(string $url, array $data, string $method): array|null
    {
        return $this->wrapper?->doApiCall($url, $data, $method);
    }
}
