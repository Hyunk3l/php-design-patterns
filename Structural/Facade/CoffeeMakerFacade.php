<?php

namespace PhpDesignPatterns\Structural\Facade;

/**
 * Class CoffeeMakerFacade
 * @package PhpDesignPatterns\Structural\Facade
 */
Class CoffeeMakerFacade
{
    /**
     * Minimum number of cups to make.
     *
     * @var integer
     */
    const MINIMUM_CUPS = 1;

    /**
     * Instance of Dispenser.
     *
     * @var Dispenser
     */
    private $coffee_dispenser;

    /**
     * Instance of Dispenser.
     *
     * @var Dispenser
     */
    private $sugar_dispenser;

    /**
     * Instance of Dispenser.
     *
     * @var Dispenser
     */
    private $water_dispenser;

    /**
     *
     */
    public function __construct()
    {
        $this->coffee_dispenser = new CoffeeDispenser;
        $this->sugar_dispenser  = new SugarDispenser;
        $this->water_dispenser  = new WaterDispenser;
    }

    /**
     * Make N cups of coffee.
     *
     * @param integer $cups Number of cups to make.
     * @return array
     */
    public function makeCups($cups)
    {
        $cups = $this->checkCups($cups);

        $coffee_cups = array();
        for($i=1;$i<$cups+1;$i++) {
            $products = implode(',', $this->getProducts());
            $coffee_cups["coffee #".$i] = $products;
        }
        return $coffee_cups;
    }

    /**
     * Just check cups.
     *
     * @param mixed $cups
     * @return integer
     */
    private function checkCups($cups)
    {
        if(static::MINIMUM_CUPS > $cups) {
            $cups = static::MINIMUM_CUPS;
        }
        return $cups;
    }

    /**
     * Get products from different dispensers.
     *
     * @return array
     */
    private function getProducts()
    {
        return array(
            $this->sugar_dispenser->getProduct(),
            $this->coffee_dispenser->getProduct(),
            $this->water_dispenser->getProduct(),
        );
    }
}