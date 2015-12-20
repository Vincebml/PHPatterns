<?php

namespace Test\Phpatterns\Behavioral\ChainOfResponsibility;

use Phpatterns\Behavioral\ChainOfResponsibility;
use Phpatterns\Behavioral\ChainOfResponsibility\OrderNotification;

class ChainOfResponsibilityTest extends \PHPUnit_Framework_TestCase
{
    /** @var ChainOfResponsibility\AbstractOrderNotification */
    private $chainOfResponsibility;

    protected function setUp()
    {
        $this->chainOfResponsibility = new OrderNotification\PaidOrderNotification();
        $this->chainOfResponsibility->appendNotification(new OrderNotification\ShippedOrderNotification());
    }

    public function testPaidOrderNotification()
    {
        $order = new ChainOfResponsibility\Order(12345, 'John', 'Doe');
        $order->setStatus(ChainOfResponsibility\Order::ORDER_STATUS_PAID);

        $this->assertSame(
            'Dear John Doe, thank you for your order (id: 12345). We will ship it shortly!',
            $this->chainOfResponsibility->handleOrder($order)
        );
    }

    public function testShippedOrderNotification()
    {
        $order = new ChainOfResponsibility\Order(56789, 'Albert', 'Einstein');
        $order
            ->setStatus(ChainOfResponsibility\Order::ORDER_STATUS_SHIPPED)
            ->setTrackingNumber('X4RT657P5');

        $this->assertSame(
            'Dear Albert Einstein, your order has been shipped! Your tracking number: X4RT657P5',
            $this->chainOfResponsibility->handleOrder($order)
        );
    }

    /**
     * There is no responsibility set for a canceled order.
     * No notification will be sent.
     */
    public function testCanceledOrderNotification()
    {
        $order = new ChainOfResponsibility\Order(34541, 'Denzel', 'Washington');
        $order->setStatus(ChainOfResponsibility\Order::ORDER_STATUS_CANCELED);

        $this->assertSame('', $this->chainOfResponsibility->handleOrder($order));
    }
}
