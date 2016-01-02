<?php

namespace Phpatterns\Behavioral\Iterator\WithoutSPL;

use Phpatterns\Behavioral\Iterator;

class BottleCrateIterator implements IteratorInterface
{
    /** @var Iterator\BottleCrate */
    private $bottleCrate;

    /** @var int */
    private $index;

    public function __construct(Iterator\BottleCrate $bottleCrate)
    {
        $this->bottleCrate = $bottleCrate;
    }

    /**
     * @return Iterator\Bottle
     */
    public function currentItem()
    {
        if (!$this->isDone()) {
            return $this->bottleCrate->getBottle($this->index);
        }

        throw new \OutOfBoundsException("No more bottle in the crate.");
    }

    public function first()
    {
        $this->index = 0;
    }

    public function isDone()
    {
        return $this->index >= $this->bottleCrate->getCount();
    }

    public function next()
    {
        $this->index++;
    }
}
