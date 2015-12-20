<?php

namespace Phpatterns\Structural\Composite;

class Shipment
{
    /** @var ShipmentElementInterface[] */
    private $elements;

    /**
     * @param ShipmentElementInterface[] $elements
     */
    public function __construct(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * Get the number of elements in the Shipment
     * @return int
     */
    public function getItemsCount()
    {
        $total = 0;
        foreach ($this->elements as $element) {
            $total += $element->getItemsCount();
        }
        return $total;
    }

    /**
     * Get the total price of the elements in the Shipment
     * @return float
     */
    public function getValue()
    {
        $totalValue = 0.0;
        foreach ($this->elements as $element) {
            $totalValue += $element->getPrice();
        }
        return $totalValue;
    }
}
