<?php

namespace Test\Phpatterns\Behavioral\Observer\WithoutSPL;

use Phpatterns\Behavioral\Observer\WithoutSPL;
use PHPUnit_Framework_TestCase;

class ProductPriceObserverTest extends PHPUnit_Framework_TestCase
{
    public function testProductPriceObserverInstance()
    {
        $productPriceObserver = new WithoutSPL\ProductPriceObserver();
        $this->assertInstanceOf(WithoutSPL\ObserverInterface::class, $productPriceObserver);
    }

    public function testObserverIsUpdated()
    {
        // Create a mock for the ProductPriceObserver class and only mock the update() method.
        $productPriceObserver = $this
            ->getMockBuilder(WithoutSPL\ProductPriceObserver::class)
            ->setMethods(array('update'))
            ->getMock();

        // Set up the expectation for the update() method (called only once
        // and with an instance of SubjectInterface as its parameter).
        $productPriceObserver
            ->expects($this->once())
            ->method('update')
            ->with($this->isInstanceOf(WithoutSPL\SubjectInterface::class));

        // Create the Product, attach the ProductPriceObserver object and notify it.
        $product = new WithoutSPL\Product();
        $product->attach($productPriceObserver);
        $product->notify();
    }
}
