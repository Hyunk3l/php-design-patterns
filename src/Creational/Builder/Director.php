<?php

declare(strict_types=1);

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

class Director
{
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
