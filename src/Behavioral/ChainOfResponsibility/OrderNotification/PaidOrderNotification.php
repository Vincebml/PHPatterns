<?php

namespace Phpatterns\Behavioral\ChainOfResponsibility\OrderNotification;

use Phpatterns\Behavioral\ChainOfResponsibility;

class PaidOrderNotification extends ChainOfResponsibility\AbstractOrderNotification
{
    public function __construct()
    {
        $this->orderStatus = ChainOfResponsibility\Order::ORDER_STATUS_PAID;
        $this->followingOrderNotification = null;
    }

    /**
     * @param ChainOfResponsibility\Order $order
     * @return string
     */
    public function sendNotification(ChainOfResponsibility\Order $order)
    {
        return sprintf(
            'Dear %s %s, thank you for your order (id: %d). We will ship it shortly!',
            $order->getCustomerFirstName(),
            $order->getCustomerLastName(),
            $order->getUid()
        );
    }
}
