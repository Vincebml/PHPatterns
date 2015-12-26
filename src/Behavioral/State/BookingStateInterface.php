<?php

namespace Phpatterns\Behavioral\State;

interface BookingStateInterface
{
    /**
     * @param Booking $booking
     * @throws \Exception
     * @return mixed
     */
    public function cancel(Booking $booking);

    /**
     * @param Booking $booking
     * @throws \Exception
     * @return mixed
     */
    public function pay(Booking $booking);

    /**
     * @param Booking $booking
     * @throws \Exception
     * @return mixed
     */
    public function reserve(Booking $booking);
}
