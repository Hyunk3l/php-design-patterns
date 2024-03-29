<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Facade;

class CoffeeMakerFacade
{
    private const int MINIMUM_CUPS = 1;

    private Dispenser $coffeeDispenser;

    private Dispenser $sugarDispenser;

    private Dispenser $waterDispenser;

    public function __construct()
    {
        $this->coffeeDispenser = new CoffeeDispenser();
        $this->sugarDispenser  = new SugarDispenser();
        $this->waterDispenser  = new WaterDispenser();
    }

    public function makeCups(int $numberOfCupsToMake): array
    {
        $numberOfCupsToMake = $this->checkCupsToMake($numberOfCupsToMake);

        $coffeeCups = [];
        for ($i=1; $i<$numberOfCupsToMake+1; $i++) {
            $products = implode(',', $this->getProducts());
            $coffeeCups["coffee #".$i] = $products;
        }
        return $coffeeCups;
    }

    private function checkCupsToMake(int $numberOfCupsToMake): int
    {
        if (static::MINIMUM_CUPS > $numberOfCupsToMake) {
            $numberOfCupsToMake = static::MINIMUM_CUPS;
        }
        return $numberOfCupsToMake;
    }

    private function getProducts(): array
    {
        return [
            $this->sugarDispenser->getProduct(),
            $this->coffeeDispenser->getProduct(),
            $this->waterDispenser->getProduct(),
        ];
    }
}
