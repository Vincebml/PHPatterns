<?php

namespace Phpatterns\Behavioral\State;

class Booking
{
    /** @var BookingStateInterface */
    private $state = null;

    /**
     * @throws \Exception
     * @return boolean
     */
    public function cancel()
    {
        return $this->state->cancel($this);
    }

    /**
     * @throws \Exception
     * @return boolean
     */
    public function pay()
    {
        return $this->state->pay($this);
    }

    /**
     * @throws \Exception
     * @return boolean
     */
    public function reserve()
    {
        return $this->state->reserve($this);
    }

    /**
     * @param BookingStateInterface $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return BookingStateInterface
     */
    public function getState()
    {
        return $this->state;
    }
}
