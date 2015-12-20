<?php

namespace Phpatterns\Behavioral\Memento;

class Memento
{
    /** @var OrderState */
    private $state;

    public function __construct(OrderState $state)
    {
        $this->state = $state;
    }

    /**
     * @return OrderState
     */
    public function getState()
    {
        return $this->state;
    }
}
