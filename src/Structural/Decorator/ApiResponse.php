<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

/**
 * Class ApiResponse
 * @package Hyunk3l\PhpDesignPatterns\Structural\Decorator
 */
class ApiResponse implements ResponseInterface
{
    /**
     * Render the api response.
     *
     * @return mixed
     */
    public function render()
    {
        return array(
            'status'    => 'ok',
            'message'   =>  'raw api response',
        );
    }
}
