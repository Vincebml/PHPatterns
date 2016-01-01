<?php

namespace Phpatterns\Behavioral\State\BookingState;

use Phpatterns\Behavioral\State;

class Reserved implements State\BookingStateInterface
{
    /**
     * The reservation can always be canceled
     * @param State\Booking $booking
     * @return bool
     */
    public function cancel(State\Booking $booking)
    {
        // ...
        // Cancel the reservation
        // ...

        $booking->setState(new Cancelled());
        return true;
    }

    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return bool
     */
    public function pay(State\Booking $booking)
    {
        throw new \Exception('Already paid');
    }

    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return bool
     */
    public function reserve(State\Booking $booking)
    {
        throw new \Exception('Already reserved');
    }
}
