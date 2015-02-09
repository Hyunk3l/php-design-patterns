<?php

namespace PhpDesignPatterns\Structural\Decorator;

/**
 * Class ApiResponse
 * @package PhpDesignPatterns\Structural\Decorator
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