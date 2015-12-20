<?php

namespace Phpatterns\Behavioral\Mediator;

abstract class AbstractColleague
{
    /** @var TaxiCallCenterInterface */
    private $mediator;

    /**
     * @param TaxiCallCenterInterface $mediator
     */
    public function __construct(TaxiCallCenterInterface $mediator)
    {
        $this->mediator = $mediator;
    }

    /**
     * @return TaxiCallCenterInterface
     */
    protected function getMediator()
    {
        return $this->mediator;
    }
}
