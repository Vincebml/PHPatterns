<?php

namespace Phpatterns\Structural\Composite\ShipmentElement;

use Phpatterns\Structural\Composite;

class Box implements Composite\ShipmentElementInterface
{
    /** @var Composite\ShipmentElementInterface[] */
    private $elements;

    public function __construct()
    {
        $this->elements = [];
    }

    /**
     * @return Composite\ShipmentElementInterface[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * Add an element to the collection of elements
     * @param Composite\ShipmentElementInterface $element
     */
    public function addElement(Composite\ShipmentElementInterface $element)
    {
        if (! in_array($element, $this->elements, true)) {
            $this->elements[] = $element;
        }
    }

    /**
     * Remove an element from the collection of elements
     * @param Composite\ShipmentElementInterface $element
     */
    public function removeElement(Composite\ShipmentElementInterface $element)
    {
        $key = array_search($element, $this->elements, true);
        if ($key !== false) {
            unset($this->elements[$key]);
        }
    }

    /**
     * Get the number of elements in the collection
     * @return int
     */
    public function getItemsCount()
    {
        return count($this->elements);
    }

    /**
     * Get the total price of the elements in the collection
     * @return float
     */
    public function getPrice()
    {
        $totalPrice = 0.0;
        foreach ($this->elements as $element) {
            $totalPrice += $element->getPrice();
        }
        return $totalPrice;
    }
}
