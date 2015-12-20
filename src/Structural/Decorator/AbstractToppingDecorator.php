<?php

namespace Phpatterns\Structural\Decorator;

abstract class AbstractToppingDecorator implements BreadInterface
{
    /** @var string */
    protected $description;

    /** @var float */
    protected $price;

    /**
     * @var BreadInterface
     * The element that will be wrapped (Bread or Topping)
     */
    protected $decoratedElement;

    public function __construct(BreadInterface $element)
    {
        $this->decoratedElement = $element;
    }

    /**
     * Retrieve the description for wrapped elements
     * @return string
     */
    abstract public function getDescription();

    /**
     * Retrieve the price for wrapped elements
     * @return float
     */
    abstract public function getPrice();
}
