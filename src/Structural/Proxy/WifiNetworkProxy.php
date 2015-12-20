<?php

namespace Phpatterns\Structural\Proxy;

class WifiNetworkProxy implements WifiNetworkInterface
{
    /** @var WifiNetwork */
    private $wifiNetwork;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->wifiNetwork = new WifiNetwork($name);
    }

    /**
     * Grant access to the WiFi network to an employee
     * @param Employee $employee
     * @return bool
     */
    public function grantAccess(Employee $employee)
    {
        //now, it's a network with "access control"
        if ($employee->getAccessLevel() === Employee::ACCESS_LEVEL_HIGH) {
            return $this->wifiNetwork->grantAccess($employee);
        }

        return false;
    }
}
