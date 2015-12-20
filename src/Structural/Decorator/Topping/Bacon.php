<?php

namespace Phpatterns\Structural\Decorator\Topping;

use Phpatterns\Structural\Decorator;

class Bacon extends Decorator\AbstractToppingDecorator
{
    public function __construct(Decorator\BreadInterface $element)
    {
        parent::__construct($element);
        $this->description = "Bacon";
        $this->price = 0.59;
    }

    /**
     * Retrieve the description for the Bacon + the wrapped element
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
     * Retrieve the price for the Bacon + the wrapped element
     * @return float
     */
    public function getPrice()
    {
        return $this->price + $this->decoratedElement->getPrice();
    }
}
