<?php

namespace Phpatterns\Behavioral\ChainOfResponsibility;

class Order
{
    const ORDER_STATUS_PENDING = 1; //default
    const ORDER_STATUS_PAID = 2;
    const ORDER_STATUS_PREPARED = 3;
    const ORDER_STATUS_SHIPPED = 4;
    const ORDER_STATUS_DELIVERED = 5;
    const ORDER_STATUS_CANCELED = 6;

    /** @var int */
    private $uid;

    /** @var int */
    private $status;

    /** @var string */
    private $trackingNumber;

    /** @var string */
    private $customerFirstName;

    /** @var string */
    private $customerLastName;

    /**
     * ...
     * Other useful fields: address, items, quantities, VAT, etc.
     * ...
     */

    /**
     * @param int $uid
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct($uid, $firstName, $lastName)
    {
        $this->uid = $uid;
        $this->customerFirstName = $firstName;
        $this->customerLastName = $lastName;
        $this->status = self::ORDER_STATUS_PENDING;
        $this->trackingNumber = null;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * @param string $trackingNumber
     * @return $this
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }
}
