<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

class ApiResponse implements ResponseInterface
{
    public function render(): array
    {
        return [
            'status'    => 'ok',
            'message'   =>  'raw api response',
        ];
    }
}
