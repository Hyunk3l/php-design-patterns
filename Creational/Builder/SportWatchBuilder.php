<?php

namespace PhpDesignPatterns\Creational\Builder;

/**
 * Class SportWatchBuilder
 * @package PhpDesignPatterns\Creational\Builder
 */
class SportWatchBuilder implements WatchBuilderInterface
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
        $this->setWatch(new SportWatch);
        return $this;
    }

    /**
     * @return mixed
     */
    public function addBox()
    {
        $this->watch->addComponent("watch box", new Components\Box());
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
        $this->watch->addComponent("First chronograph hand", new Components\Hand());
        $this->watch->addComponent("Second chronograph hand", new Components\Hand());
        return $this;
    }

    /**
     * @return mixed
     */
    public function addBands()
    {
        $this->watch->addComponent("Upper band", new Components\Band());
        $this->watch->addComponent("Lower band", new Components\Band());
        return $this;
    }

    /**
     * @return mixed
     */
    public function addMovements()
    {
        $this->watch->addComponent("Principal watch movement", new Components\Movement());
        $this->watch->addComponent("First chronograph movement", new Components\Movement());
        $this->watch->addComponent("Second chronograph movement", new Components\Movement());
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
     * @return SportWatchBuilder
     */
    public function setWatch(Watch $watch)
    {
        $this->watch = $watch;
        return $this;
    }
}