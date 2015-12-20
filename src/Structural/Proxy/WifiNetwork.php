<?php

namespace Phpatterns\Structural\Proxy;

class WifiNetwork implements WifiNetworkInterface
{
    /** @var string */
    private $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Grant access to the WiFi network to an employee
     * @param Employee $employee
     * @return bool
     */
    public function grantAccess(Employee $employee)
    {
        //it's a public network, access granted to everyone!
        return true;
    }
}
