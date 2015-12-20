<?php

namespace Phpatterns\Structural\Proxy;

class Employee
{
    const ACCESS_LEVEL_LOW = 0; //no access to WiFi
    const ACCESS_LEVEL_HIGH = 1; //access granted to WiFi

    /** @var string */
    private $firstName;

    /** @var string */
    private $lastName;

    /** @var int */
    private $accessLevel;

    /**
     * @param string $firstName
     * @param string $lastName
     * @param int $accessLevel
     *  0 = No access to WiFi
     *  1 = Access granted to WiFi
     */
    public function __construct($firstName, $lastName, $accessLevel)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->accessLevel = $accessLevel;
    }

    /**
     * @return int
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }
}
