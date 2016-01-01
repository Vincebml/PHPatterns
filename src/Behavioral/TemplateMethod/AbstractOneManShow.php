<?php

namespace Phpatterns\Behavioral\TemplateMethod;

abstract class AbstractOneManShow
{
    /**
     * General algorithm
     */
    public function showMustGoOn()
    {
        $this->receiveThePublic();
        $this->doTheShow();
        $this->thankThePublic();
    }

    /**
     * This is an invariant part of the algorithm and it can't be modified.
     */
    final protected function receiveThePublic()
    {
        // ...
        // Check tickets, allocate seats, etc.
        // ...
    }

    /**
     * This will vary according to the artist
     */
    abstract protected function doTheShow();

    /**
     * There is a default behavior but every artist always has the
     * opportunity to thank the public as he wishes.
     */
    protected function thankThePublic()
    {
        // ...
        // Thank the audience
        // ...
    }
}
