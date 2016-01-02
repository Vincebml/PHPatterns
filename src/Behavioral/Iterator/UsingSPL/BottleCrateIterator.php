<?php

namespace Phpatterns\Behavioral\Iterator\UsingSPL;

use Phpatterns\Behavioral\Iterator;

/**
 * We are using the Iterator interface provided by PHP
 * @link http://php.net/manual/en/class.iterator.php
 */
class BottleCrateIterator implements \Iterator
{
    /** @var Iterator\BottleCrate */
    private $bottleCrate;

    /** @var int */
    private $index;

    public function __construct(Iterator\BottleCrate $bottleCrate)
    {
        $this->bottleCrate = $bottleCrate;
        $this->index = 0;
    }

    /**
     * Return the current Bottle
     * @return Iterator\Bottle
     */
    public function current()
    {
        return $this->bottleCrate->getBottle($this->index);
    }

    /**
     * Move forward to next Bottle
     */
    public function next()
    {
        $this->index++;
    }

    /**
     * Return the key of the current Bottle
     * @return int
     */
    public function key()
    {
        return $this->index;
    }

    /**
     * Checks if current position is valid
     * @return bool
     */
    public function valid()
    {
        return null !== $this->bottleCrate->getBottle($this->index);
    }

    /**
     * Rewind the Iterator to the first Bottle
     */
    public function rewind()
    {
        $this->index = 0;
    }
}
