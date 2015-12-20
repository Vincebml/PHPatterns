<?php

namespace Test\Phpatterns\Structural\Proxy;

use Phpatterns\Structural\Proxy;

class ProxyTest extends \PHPUnit_Framework_TestCase
{
    /** @var Proxy\WifiNetworkProxy */
    private $wifiNetworkProxy;

    /** @var Proxy\WifiNetwork */
    private $wifiNetwork;

    protected function setUp()
    {
        $this->wifiNetworkProxy = new Proxy\WifiNetworkProxy("My Company Name Network");
        $this->wifiNetwork = new Proxy\WifiNetwork("My Company Name Network");
    }


    public function testInterfaceImplementation()
    {
        $this->assertInstanceOf(Proxy\WifiNetworkInterface::class, $this->wifiNetworkProxy);
        $this->assertInstanceOf(Proxy\WifiNetworkInterface::class, $this->wifiNetwork);
    }

    public function testWifiNetworkProxyAccess()
    {
        $userLowLevel = new Proxy\Employee('John', 'Doe', Proxy\Employee::ACCESS_LEVEL_LOW);
        $this->assertFalse($this->wifiNetworkProxy->grantAccess($userLowLevel));

        $userHighLevel = new Proxy\Employee('Jason', 'Statham', Proxy\Employee::ACCESS_LEVEL_HIGH);
        $this->assertTrue($this->wifiNetworkProxy->grantAccess($userHighLevel));
    }

    public function testWifiNetworkAccess()
    {
        $userLowLevel = new Proxy\Employee('Halle', 'Berry', Proxy\Employee::ACCESS_LEVEL_LOW);
        $this->assertTrue($this->wifiNetwork->grantAccess($userLowLevel));

        $userHighLevel = new Proxy\Employee('Jennifer', 'Lawrence', Proxy\Employee::ACCESS_LEVEL_HIGH);
        $this->assertTrue($this->wifiNetwork->grantAccess($userHighLevel));
    }
}
