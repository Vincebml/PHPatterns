<?php

namespace Phpatterns\Behavioral\Iterator\WithoutSPL;

interface IteratorInterface
{
    /**
     * Rewind the Iterator to the first element
     */
    public function currentItem();

    /**
     * Return the current element
     */
    public function first();

    /**
     * Return the key of the current element
     */
    public function isDone();

    /**
     * Move forward to next element
     */
    public function next();
}
