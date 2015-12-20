<?php

namespace Phpatterns\Behavioral\Mediator;

/**
 * Interface TaxiCallCenterInterface
 * Classes implementing that interface will be used as Mediators
 */
interface TaxiCallCenterInterface
{
    /**
     * @return bool
     */
    public function requestRace();

    /**
     * @return bool
     */
    public function acceptRace();
}
