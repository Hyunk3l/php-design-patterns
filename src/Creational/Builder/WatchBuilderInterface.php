<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

interface WatchBuilderInterface
{
    public function createWatch(): self;

    public function addBox(): self;

    public function addHands(): self;

    public function addBands(): self;

    public function addMovements(): self;

    public function getWatch(): Watch;
}