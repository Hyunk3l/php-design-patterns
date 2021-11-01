<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

/**
 * Class JsonResponse
 * @package Hyunk3l\PhpDesignPatterns\Structural\Decorator
 */
class JsonResponse extends Decorator
{
    /**
     * Transform output to json.
     *
     * @return string
     */
    public function render()
    {
        $output = $this->wrapper->render();
        return json_encode($output);
    }
}
