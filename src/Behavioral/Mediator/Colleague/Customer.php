<?php

namespace Phpatterns\Behavioral\Mediator\Colleague;

use Phpatterns\Behavioral\Mediator;

class Customer extends Mediator\AbstractColleague
{
    /**
     * @param Mediator\TaxiCallCenterInterface $mediator
     */
    public function __construct(Mediator\TaxiCallCenterInterface $mediator)
    {
        parent::__construct($mediator);
    }

    /**
     * @return bool
     */
    public function requestRace()
    {
        return $this->getMediator()->requestRace();
    }

    /**
     * @return bool
     */
    public function confirm()
    {
        return true;
    }
}
