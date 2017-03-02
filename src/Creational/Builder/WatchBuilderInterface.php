<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

/**
 * Interface WatchBuilderInterface
 * @package Hyunk3l\PhpDesignPatterns\Creational\Builder
 */
interface WatchBuilderInterface
{
    /**
     * @return mixed
     */
    public function createWatch();

    /**
     * @return mixed
     */
    public function addBox();

    /**
     * @return mixed
     */
    public function addHands();

    /**
     * @return mixed
     */
    public function addBands();

    /**
     * @return mixed
     */
    public function addMovements();

    /**
     * @return mixed
     */
    public function getWatch();

    /**
     * @param Watch $watch
     * @return mixed
     */
    public function setWatch(Watch $watch);
}