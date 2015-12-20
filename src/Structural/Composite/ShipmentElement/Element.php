<?php

namespace Phpatterns\Structural\Composite\ShipmentElement;

use Phpatterns\Structural\Composite;

class Element implements Composite\ShipmentElementInterface
{
    /** @var float */
    private $price;

    /**
     * @param float $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    /**
     * Add an element to the collection of elements
     * @param Composite\ShipmentElementInterface $element
     * @throws \Exception
     */
    public function addElement(Composite\ShipmentElementInterface $element)
    {
        throw new \Exception('Action not supported!');
    }

    /**
     * Remove an element from the collection of elements
     * @param Composite\ShipmentElementInterface $element
     * @throws \Exception
     */
    public function removeElement(Composite\ShipmentElementInterface $element)
    {
        throw new \Exception('Action not supported!');
    }

    /**
     * Get the number of elements in the collection (just one here)
     * @return int
     */
    public function getItemsCount()
    {
        return 1;
    }

    /**
     * Get the price of the element
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
