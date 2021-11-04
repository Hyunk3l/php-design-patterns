<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

class JsonResponse extends Decorator
{
    public function render(): string
    {
        $output = $this->wrapper->render();
        return json_encode($output);
    }
}
