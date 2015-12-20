<?php

namespace Phpatterns\Structural\Decorator\Bread;

use Phpatterns\Structural\Decorator;

class HoneyOatBread implements Decorator\BreadInterface
{
    /** @var string */
    private $description;

    /** @var float */
    private $price;

    public function __construct()
    {
        $this->description = "Honey Oat bread";
        $this->price = 1.99;
    }

    /**
     * Retrieve the description for HoneyOatBread
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the price for HoneyOatBread
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
