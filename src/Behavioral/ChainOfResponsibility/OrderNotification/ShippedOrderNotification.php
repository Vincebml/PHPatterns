<?php

namespace Phpatterns\Behavioral\ChainOfResponsibility\OrderNotification;

use Phpatterns\Behavioral\ChainOfResponsibility;

class ShippedOrderNotification extends ChainOfResponsibility\AbstractOrderNotification
{
    public function __construct()
    {
        $this->orderStatus = ChainOfResponsibility\Order::ORDER_STATUS_SHIPPED;
        $this->followingOrderNotification = null;
    }

    /**
     * @param ChainOfResponsibility\Order $order
     * @return string
     */
    public function sendNotification(ChainOfResponsibility\Order $order)
    {
        return sprintf(
            'Dear %s %s, your order has been shipped! Your tracking number: %s',
            $order->getCustomerFirstName(),
            $order->getCustomerLastName(),
            $order->getTrackingNumber()
        );
    }
}
