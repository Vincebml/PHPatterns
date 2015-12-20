<?php

namespace Phpatterns\Structural\Facade;

class CreditCard
{
    /** @var string */
    private $number;

    /** @var string */
    private $pin;

    /** @var \DateTime */
    private $expirationDate;

    /**
     * @param string $number
     * @param string $pin
     * @param \DateTime $expirationDate
     */
    public function __construct($number, $pin, \DateTime $expirationDate)
    {
        $this->number = $number;
        $this->pin = $pin;
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }
}
