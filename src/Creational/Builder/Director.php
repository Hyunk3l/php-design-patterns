<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

/**
 * Class Director
 * @package Hyunk3l\PhpDesignPatterns\Creational\Builder
 */
class Director
{

    /**
     * Builds a Watch using a builder.
     *
     * @param WatchBuilderInterface $builder
     * @return Instance of...
     */
    public function build(WatchBuilderInterface $builder)
    {
        return $builder
            ->createWatch()
            ->addMovements()
            ->addHands()
            ->addBox()
            ->addBands()
            ->getWatch()
        ;
    }
}