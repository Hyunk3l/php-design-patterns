<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Structural\Decorator;

interface ResponseInterface
{
    public function render(): array|string;
}
