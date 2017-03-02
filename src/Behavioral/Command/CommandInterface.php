<?php

namespace Hyunk3l\PhpDesignPatterns\Behavioral\Command;

/**
 * Interface CommandInterface
 * @package Hyunk3l\PhpDesignPatterns\Behavioral\Command
 */
interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();
}