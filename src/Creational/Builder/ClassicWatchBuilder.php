<?php

namespace Hyunk3l\PhpDesignPatterns\Creational\Builder;

/**
 * Class ClassicWatchBuilder
 * @package Hyunk3l\PhpDesignPatterns\Creational\Builder
 */
class ClassicWatchBuilder implements WatchBuilderInterface
{
    /**
     * Instance of SportWatch.
     *
     * @var SportWatch
     */
    private $watch;

    /**
     * @return mixed
     */
    public function createWatch()
    {
        $this->setWatch(new ClassicWatch);
        return $this;
    }

    /**
     * @return mixed
     */
    public function addBox()
    {
        $this->watch->addComponent("Watch box", new Components\Box());
        return $this;
    }

    /**
     * @return mixed
     */
    public function addHands()
    {
        $this->watch->addComponent("Seconds hand", new Components\Hand());
        $this->watch->addComponent("Minutes hand", new Components\Hand());
        $this->watch->addComponent("Hours hand", new Components\Hand());
        return $this;
    }

    /**
     * @return mixed
     */
    public function addBands()
    {
        $this->watch->addComponent("Leather upper band", new Components\Band());
        $this->watch->addComponent("Leather lower band", new Components\Band());
        return $this;
    }

    /**
     * @return mixed
     */
    public function addMovements()
    {
        $this->watch->addComponent("Principal watch movement", new Components\Movement());
        $this->watch->addComponent("Date watch movement", new Components\Movement());
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWatch()
    {
        return $this->watch;
    }

    /**
     * @param Watch $watch
     * @return ClassicWatchBuilder
     */
    public function setWatch(Watch $watch)
    {
        $this->watch = $watch;
        return $this;
    }
}