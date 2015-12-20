<?php

namespace Phpatterns\Behavioral\Memento;

class OrderState
{
    const ORDER_STATUS_PENDING = 1; //default
    const ORDER_STATUS_PAID = 2;
    const ORDER_STATUS_PREPARED = 3;
    const ORDER_STATUS_SHIPPED = 4;
    const ORDER_STATUS_DELIVERED = 5;
    const ORDER_STATUS_CANCELED = 6;

    /** @var int */
    private $status;

    /** @var \DateTime */
    private $created;

    public function __construct($status = self::ORDER_STATUS_PENDING)
    {
        $this->status = $status;
        $this->created = new \DateTime('now');
    }
}
