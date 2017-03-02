<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

use PhpDesignPatterns\Creational\Builder\Components\ComponentInterface;

/**
 * Class Watch
 * @package Hyunk3l\PhpDesignPatterns\Creational\Builder
 */
abstract class Watch
{
    /**
     * List of watch components.
     *
     * @var array
     */
    private $watch_components;

    /**
     * @param $name
     * @param ComponentInterface $component
     * @return $this
     */
    public function addComponent($name, ComponentInterface $component)
    {
        $this->watch_components[$name] = $component;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getWatchComponents()
    {
        return $this->watch_components;
    }
}