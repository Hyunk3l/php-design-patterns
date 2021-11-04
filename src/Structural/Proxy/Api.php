<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Proxy;

class Api
{
    public function doApiCall(string $url, array $data, string $method): array
    {
        return [
            'status'    => 200,
            'message'   => 'Api call performed successfully.',
            'data'      => [
                'id'    => 1,
                'name'  => 'foo',
            ],
        ];
    }
}
