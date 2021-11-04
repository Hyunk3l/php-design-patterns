<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;

abstract class Watch
{
    private array $watchComponents;

    public function addComponent(string $name, ComponentInterface $component): self
    {
        $this->watchComponents[$name] = $component;
        return $this;
    }

    public function getWatchComponents(): array
    {
        return $this->watchComponents;
    }
}
