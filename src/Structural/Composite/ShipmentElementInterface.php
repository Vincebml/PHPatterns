<?php

namespace Phpatterns\Structural\Composite;

interface ShipmentElementInterface
{
    /**
     * Add an element to the collection of elements
     * @param ShipmentElementInterface $element
     */
    public function addElement(ShipmentElementInterface $element);

    /**
     * Remove an element from the collection of elements
     * @param ShipmentElementInterface $element
     */
    public function removeElement(ShipmentElementInterface $element);

    /**
     * Get the number of elements in the collection
     * @return int
     */
    public function getItemsCount();

    /**
     * Get the price of the element or the total price of the elements in the collection
     * @return float
     */
    public function getPrice();
}
