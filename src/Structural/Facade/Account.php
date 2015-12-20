<?php

namespace Phpatterns\Structural\Facade;

class Account
{
    /** @var float */
    private $balance;

    /**
     * @param float $balance
     */
    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }
}
