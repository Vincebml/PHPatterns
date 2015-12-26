<?php

namespace Phpatterns\Behavioral\State\BookingState;

use Phpatterns\Behavioral\State;

class Cancelled implements State\BookingStateInterface
{
    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return boolean
     */
    public function cancel(State\Booking $booking)
    {
        throw new \Exception('Already cancelled');
    }

    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return boolean
     */
    public function pay(State\Booking $booking)
    {
        throw new \Exception('Order cancelled');
    }

    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return boolean
     */
    public function reserve(State\Booking $booking)
    {
        throw new \Exception('Order cancelled');
    }
}
