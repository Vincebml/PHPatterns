<?php

namespace Phpatterns\Behavioral\Mediator\Colleague;

use Phpatterns\Behavioral\Mediator;

class Taxi extends Mediator\AbstractColleague
{
    /** @var bool */
    private $available;

    /**
     * @param Mediator\TaxiCallCenterInterface $mediator
     */
    public function __construct(Mediator\TaxiCallCenterInterface $mediator)
    {
        parent::__construct($mediator);
        $this->available = true;
    }

    /**
     * @param boolean $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return bool
     */
    public function request()
    {
        if ($this->available) {
            $this->setAvailable(false);
            return $this->getMediator()->acceptRace();
        }

        return false;
    }
}
