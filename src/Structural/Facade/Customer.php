<?php

namespace Phpatterns\Structural\Facade;

class Customer
{
    /** @var string */
    private $uid;

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var CreditCard */
    private $creditCard;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param CreditCard $creditCard
     */
    public function __construct($firstName, $lastName, CreditCard $creditCard)
    {
        $this->uid = uniqid(); //just an example...
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->creditCard = $creditCard;
    }

    /**
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @return CreditCard
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }
}
