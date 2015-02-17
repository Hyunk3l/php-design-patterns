<?php

namespace PhpDesignPatterns\Behavioral\Command;

/**
 * Interface CommandInterface
 * @package PhpDesignPatterns\Behavioral\Command
 */
interface CommandInterface
{
    /**
     * @return mixed
     */
    public function execute();
}