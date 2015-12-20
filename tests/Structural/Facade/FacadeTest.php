<?php

namespace Test\Phpatterns\Structural\Facade;

use Phpatterns\Structural\Facade;

class FacadeTest extends \PHPUnit_Framework_TestCase
{
    /** @var Facade\Customer */
    private $customer;

    protected function setUp()
    {
        $this->customer = new Facade\Customer(
            'Vincent',
            'Belmehel',
            new Facade\CreditCard(
                '123456789',
                '0000',
                new \DateTime('2025-01-01')
            )
        );
    }

    public function testWithdrawingMoneyFromFacade()
    {
        $bank = $this->getMock(
            Facade\Bank::class,
            ['validateCard', 'checkAccountBalance'],
            [
                [$this->customer->getUid() => new Facade\Account(10000)]
            ]
        );

        $bank
            ->expects($this->once())
            ->method('validateCard');

        $bank
            ->expects($this->once())
            ->method('checkAccountBalance');

        $atmFacade = new Facade\ATMFacade($bank, $this->customer);
        $atmFacade->withdraw(5000);

        $this->assertSame(5000, $atmFacade->getBalance());
    }

    /**
     * Still possible to access to the underlying classes and methods
     */
    public function testWithdrawingMoney()
    {
        $bank = new Facade\Bank([$this->customer->getUid() => new Facade\Account(8000)]);
        $bank->withdraw($this->customer, 6000);
        $this->assertSame(2000, $bank->getBalance($this->customer));
    }
}
