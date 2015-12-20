<?php

namespace Phpatterns\Behavioral\Memento;

/**
 * Class Order
 * Used as the Originator (part of the Memento pattern).
 * It's the state of that object that we want to save and restore.
 */
class Order
{
    /** @var string */
    private $customerName;

    /** @var OrderState */
    private $state;

    public function __construct($customerName, OrderState $state)
    {
        $this->customerName = $customerName;
        $this->state = $state;
    }

    /**
     * @return Memento
     */
    public function exportState()
    {
        return new Memento(clone $this->state);
    }

    /**
     * @param Memento $memento
     */
    public function restoreState(Memento $memento)
    {
        $this->state = $memento->getState();
    }

    /**
     * @return OrderState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param OrderState $state
     */
    public function setState(OrderState $state)
    {
        $this->state = $state;
    }
}
