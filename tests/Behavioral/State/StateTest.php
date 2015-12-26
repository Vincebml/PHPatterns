<?php

namespace Test\Phpatterns\Behavioral\State;

use Phpatterns\Behavioral\State;
use Phpatterns\Behavioral\State\BookingState;

class StateTest extends \PHPUnit_Framework_TestCase
{
    /** @var State\Booking */
    private $booking;

    public function setUp()
    {
        $this->booking = new State\Booking();
    }

    public function testPreparedStateMechanism()
    {
        $this->booking->setState(new BookingState\Prepared());
        $this->assertTrue($this->booking->cancel());
        $this->assertInstanceOf(BookingState\Cancelled::class, $this->booking->getState());

        $this->booking->setState(new BookingState\Prepared());
        $this->assertTrue($this->booking->pay());
        $this->assertInstanceOf(BookingState\Reserved::class, $this->booking->getState());

        $this->booking->setState(new BookingState\Prepared());
        $this->setExpectedException('Exception', 'The order has to be paid before processing reservation');
        $this->booking->reserve();
    }

    public function testReservedStateMechanism()
    {
        $this->booking->setState(new BookingState\Reserved());
        $this->assertTrue($this->booking->cancel());
        $this->assertInstanceOf(BookingState\Cancelled::class, $this->booking->getState());

        $this->booking->setState(new BookingState\Reserved());
        $this->setExpectedException('Exception', 'Already paid');
        $this->booking->pay();

        $this->setExpectedException('Exception', 'Already reserved');
        $this->booking->reserve();
    }

    public function testCancelledStateMechanism()
    {
        $this->booking->setState(new BookingState\Cancelled());

        $this->setExpectedException('Exception', 'Already cancelled');
        $this->booking->cancel();

        $this->setExpectedException('Exception', 'Order cancelled');
        $this->booking->pay();

        $this->setExpectedException('Exception', 'Order cancelled');
        $this->booking->reserve();
    }
}
