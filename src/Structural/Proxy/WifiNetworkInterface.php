<?php

namespace Phpatterns\Structural\Proxy;

interface WifiNetworkInterface
{
    /**
     * Grant access to the WiFi network to an employee
     * @param Employee $employee
     * @return bool
     */
    public function grantAccess(Employee $employee);
}
