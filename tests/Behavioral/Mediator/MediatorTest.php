<?php

namespace Test\Phpatterns\Behavioral\Mediator;

use Phpatterns\Behavioral\Mediator;
use Phpatterns\Behavioral\Mediator\TaxiCallCenter;
use Phpatterns\Behavioral\Mediator\Colleague;

class MediatorTest extends \PHPUnit_Framework_TestCase
{
    /** @var Colleague\Customer */
    private $customer;

    protected function setUp()
    {
        $mediator = new TaxiCallCenter\YellowTaxiCallCenter();

        $this->customer = new Colleague\Customer($mediator);
        $taxi = new Colleague\Taxi($mediator);

        $mediator
            ->setCustomer($this->customer)
            ->setTaxi($taxi);
    }

    public function testTaxiRequest()
    {
        $this->assertTrue($this->customer->requestRace());
    }
}
