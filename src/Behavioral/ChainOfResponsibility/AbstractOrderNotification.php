<?php

namespace Phpatterns\Behavioral\ChainOfResponsibility;

abstract class AbstractOrderNotification
{
    /** @var int */
    protected $orderStatus;

    /** @var AbstractOrderNotification */
    protected $followingOrderNotification;

    /**
     * Add another OrderNotification object (another responsibility) to the end of the chain
     * @param AbstractOrderNotification $orderNotification
     */
    public function appendNotification(AbstractOrderNotification $orderNotification)
    {
        $this->followingOrderNotification = $orderNotification;
    }

    /**
     * @param Order $order
     * @return string
     */
    public function handleOrder(Order $order)
    {
        if ($order->getStatus() === $this->orderStatus) {
            return $this->sendNotification($order);
        } elseif (! is_null($this->followingOrderNotification)) {
            return $this->followingOrderNotification->handleOrder($order);
        }

        return '';
    }

    /**
     * @param Order $order
     * @return string
     */
    abstract protected function sendNotification(Order $order);
}
