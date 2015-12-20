<?php

namespace Phpatterns\Behavioral\Memento;

/**
 * Class History
 * Used as the Caretaker (part of the Memento pattern)
 */
class History
{
    /** @var Memento[] */
    private $mementos;

    public function __construct()
    {
        $this->mementos = [];
    }

    /**
     * Add a Memento to the history stack
     * @param Memento $memento
     */
    public function addMemento(Memento $memento)
    {
        $this->mementos[] = $memento;
    }

    /**
     * Retrieve the last Memento inserted
     * @return Memento
     */
    public function popMemento()
    {
        return array_pop($this->mementos);
    }
}
