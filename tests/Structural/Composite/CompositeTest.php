<?php

namespace Test\Phpatterns\Structural\Composite;

use Phpatterns\Structural\Composite;
use Phpatterns\Structural\Composite\ShipmentElement;

class CompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testAddAndRemoveElementsToCollection()
    {
        $pallet = new ShipmentElement\Pallet();
        $element = new ShipmentElement\Element(1.50);

        $pallet->addElement($element);
        $this->assertSame(
            $element,
            $pallet->getElements()[0]
        );

        $pallet->removeElement($element);
        $this->assertEmpty($pallet->getElements());
    }

    public function testTotalElementsCount()
    {
        $box = new ShipmentElement\Box();
        $box->addElement(new ShipmentElement\Element(13.22));

        $box2 = new ShipmentElement\Box();
        $box2->addElement(new ShipmentElement\Element(14.50));
        $box2->addElement(new ShipmentElement\Element(54.67));

        $pallet = new ShipmentElement\Pallet();
        $pallet->addElement($box2);

        $shipment = new Composite\Shipment(
            [
                new ShipmentElement\Element(25.90),
                $box,
                $pallet
            ]
        );

        $this->assertSame(
            4,
            $shipment->getItemsCount()
        );
    }

    public function testTotalElementsValue()
    {
        $box = new ShipmentElement\Box();
        $box->addElement(new ShipmentElement\Element(42.33));

        $box2 = new ShipmentElement\Box();
        $box2->addElement(new ShipmentElement\Element(22));
        $box2->addElement(new ShipmentElement\Element(123.0));

        $pallet = new ShipmentElement\Pallet();
        $pallet->addElement($box2);

        $shipment = new Composite\Shipment(
            [
                new ShipmentElement\Element(15.90),
                new ShipmentElement\Element(9),
                $box,
                $pallet
            ]
        );

        $this->assertSame(
            212.23,
            $shipment->getValue()
        );
    }

    public function testInterfaceImplementation()
    {
        //individual element (Element)
        $this->assertInstanceOf(
            Composite\ShipmentElementInterface::class,
            new ShipmentElement\Element(3.30)
        );

        //composition of elements (Box)
        $this->assertInstanceOf(
            Composite\ShipmentElementInterface::class,
            new ShipmentElement\Box()
        );

        //composition of elements (Pallet)
        $this->assertInstanceOf(
            Composite\ShipmentElementInterface::class,
            new ShipmentElement\Pallet()
        );
    }
}
