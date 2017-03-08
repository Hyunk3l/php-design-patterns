<?php

namespace Hyunk3l\PhpDesignPatterns\Structural\Flyweight;

use Hyunk3l\Test\PhpDesignPatterns\Structural\Flyweight\FlyweightInterface;

class FlyweightFactory
{
    private $pool;

    public function get(string $phrase): FlyweightInterface
    {
        if (empty($this->pool[$phrase])) {
            $this->pool[$phrase] = new StringFlyweight($phrase);
        }
        return $this->pool[$phrase];
    }

    public function count()
    {
        return count($this->pool);
    }
}