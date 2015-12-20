<?php

namespace Phpatterns\Structural\Facade;

class Bank
{
    /** @var Account[] */
    private $accounts;

    /**
     * @param array $accounts
     */
    public function __construct(array $accounts)
    {
        $this->accounts = $accounts;
    }

    /**
     * Validating a credit card
     * @param CreditCard $card
     * @throws \Exception
     */
    public function validateCard(CreditCard $card)
    {
        /**
         * ...
         * Executing control mechanisms, etc.
         * Throw \Exception on error
         * ...
         */
    }

    /**
     * @param Customer $customer
     * @param float $amount
     * @throws \Exception
     */
    public function checkAccountBalance(Customer $customer, $amount)
    {
        /**
         * ...
         * Executing control mechanisms, etc.
         * Throw \Exception on error
         * ...
         */
    }

    /**
     * Withdrawing money from an account
     * @param Customer $customer
     * @param float $amount
     */
    public function withdraw(Customer $customer, $amount)
    {
        $account = $this->accounts[$customer->getUid()];
        $account->setBalance($account->getBalance() - $amount);
        $this->accounts[$customer->getUid()] = $account;
    }

    /**
     * @param Customer $customer
     * @return float
     */
    public function getBalance(Customer $customer)
    {
        return $this->accounts[$customer->getUid()]->getBalance();
    }
}
