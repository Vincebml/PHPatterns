<?php

namespace Phpatterns\Behavioral\Mediator\TaxiCallCenter;

use Phpatterns\Behavioral\Mediator;

class YellowTaxiCallCenter implements Mediator\TaxiCallCenterInterface
{
    /** @var Mediator\AbstractColleague */
    private $taxi;

    /** @var Mediator\AbstractColleague */
    private $customer;

    /**
     * @param Mediator\AbstractColleague $taxi
     * @return $this
     */
    public function setTaxi($taxi)
    {
        $this->taxi = $taxi;
        return $this;
    }

    /**
     * @param Mediator\AbstractColleague $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return bool
     */
    public function requestRace()
    {
        return $this->taxi->request();
    }

    /**
     * @return bool
     */
    public function acceptRace()
    {
        return $this->customer->confirm();
    }
}
