<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;

abstract class Watch
{
    private $watch_components;

    public function addComponent(string $name, ComponentInterface $component): self
    {
        $this->watch_components[$name] = $component;
        return $this;
    }

    public function getWatchComponents(): array
    {
        return $this->watch_components;
    }
}
