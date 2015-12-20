<?php

namespace Phpatterns\Structural\Facade;

class ATMFacade
{
    /** @var Bank */
    private $bank;

    /** @var Customer */
    private $customer;

    /**
     * @param Bank $bank
     * @param Customer $customer
     */
    public function __construct(Bank $bank, Customer $customer)
    {
        $this->bank = $bank;
        $this->customer = $customer;
    }

    /**
     * Withdrawing money
     * @param float $amount
     * @throws \Exception
     */
    public function withdraw($amount)
    {
        $this->bank->validateCard($this->customer->getCreditCard());
        $this->bank->checkAccountBalance($this->customer, $amount);
        $this->bank->withdraw($this->customer, $amount);
    }

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->bank->getBalance($this->customer);
    }

    /*
     * ...
     *
     * Other methods (examples: deposit money, transfer money, etc.)
     *
     * ...
     */
}
