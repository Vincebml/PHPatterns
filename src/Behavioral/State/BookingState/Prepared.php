<?php

namespace Phpatterns\Behavioral\State\BookingState;

use Phpatterns\Behavioral\State;

class Prepared implements State\BookingStateInterface
{
    /**
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
     * @return bool
     */
    public function pay(State\Booking $booking)
    {
        // ...
        // Do the necessary to pay
        // ...

        $booking->setState(new Reserved());
        return true;
    }

    /**
     * @param State\Booking $booking
     * @throws \Exception
     * @return boolean
     */
    public function reserve(State\Booking $booking)
    {
        throw new \Exception('The order has to be paid before processing reservation');
    }
}
