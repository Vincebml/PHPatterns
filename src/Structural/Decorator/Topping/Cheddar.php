<?php

namespace Phpatterns\Structural\Decorator\Topping;

use Phpatterns\Structural\Decorator;

class Cheddar extends Decorator\AbstractToppingDecorator
{
    public function __construct(Decorator\BreadInterface $element)
    {
        parent::__construct($element);
        $this->description = "Cheddar";
        $this->price = 0.79;
    }

    /**
     * Retrieve the description for the Cheddar + the wrapped element
     * @return string
     */
    public function getDescription()
    {
        return sprintf(
            "%s, %s",
            $this->decoratedElement->getDescription(),
            $this->description
        );
    }

    /**
     * Retrieve the price for the Cheddar + the wrapped element
     * @return float
     */
    public function getPrice()
    {
        return $this->price + $this->decoratedElement->getPrice();
    }
}
