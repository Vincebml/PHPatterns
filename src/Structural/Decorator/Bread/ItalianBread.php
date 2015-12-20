<?php

namespace Phpatterns\Structural\Decorator\Bread;

use Phpatterns\Structural\Decorator;

class ItalianBread implements Decorator\BreadInterface
{
    /** @var string */
    private $description;

    /** @var float */
    private $price;

    public function __construct()
    {
        $this->description = "Italian bread";
        $this->price = 1.0;
    }

    /**
     * Retrieve the description for ItalianBread
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Retrieve the price for ItalianBread
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
