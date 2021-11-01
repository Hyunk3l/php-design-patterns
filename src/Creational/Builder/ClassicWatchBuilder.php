<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Box;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Band;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Movement;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Hand;

class ClassicWatchBuilder implements WatchBuilderInterface
{
    private $watch;

    public function createWatch(): WatchBuilderInterface
    {
        $this->watch = new ClassicWatch;
        return $this;
    }

    public function addBox(): WatchBuilderInterface
    {
        $this->watch->addComponent("Watch box", new Box());
        return $this;
    }

    public function addHands(): WatchBuilderInterface
    {
        $this->watch->addComponent("Seconds hand", new Hand());
        $this->watch->addComponent("Minutes hand", new Hand());
        $this->watch->addComponent("Hours hand", new Hand());
        return $this;
    }

    public function addBands(): WatchBuilderInterface
    {
        $this->watch->addComponent("Leather upper band", new Band());
        $this->watch->addComponent("Leather lower band", new Band());
        return $this;
    }

    public function addMovements(): WatchBuilderInterface
    {
        $this->watch->addComponent("Principal watch movement", new Movement());
        $this->watch->addComponent("Date watch movement", new Movement());
        return $this;
    }

    public function getWatch(): Watch
    {
        return $this->watch;
    }
}
