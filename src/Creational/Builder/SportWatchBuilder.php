<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Box;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Hand;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Band;
use Hyunk3l\PhpDesignPatterns\Creational\Builder\Components\Movement;

class SportWatchBuilder implements WatchBuilderInterface
{
    private $watch;

    public function createWatch(): WatchBuilderInterface
    {
        $this->watch = new SportWatch;
        return $this;
    }

    public function addBox(): WatchBuilderInterface
    {
        $this->watch->addComponent("watch box", new Box());
        return $this;
    }

    public function addHands(): WatchBuilderInterface
    {
        $this->watch->addComponent("Seconds hand", new Hand());
        $this->watch->addComponent("Minutes hand", new Hand());
        $this->watch->addComponent("Hours hand", new Hand());
        $this->watch->addComponent("First chronograph hand", new Hand());
        $this->watch->addComponent("Second chronograph hand", new Hand());
        return $this;
    }

    public function addBands(): WatchBuilderInterface
    {
        $this->watch->addComponent("Upper band", new Band());
        $this->watch->addComponent("Lower band", new Band());
        return $this;
    }

    public function addMovements(): WatchBuilderInterface
    {
        $this->watch->addComponent("Principal watch movement", new Movement());
        $this->watch->addComponent("First chronograph movement", new Movement());
        $this->watch->addComponent("Second chronograph movement", new Movement());
        return $this;
    }

    public function getWatch(): Watch
    {
        return $this->watch;
    }
}