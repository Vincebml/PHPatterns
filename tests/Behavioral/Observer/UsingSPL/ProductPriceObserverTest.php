<?php

namespace Test\Phpatterns\Behavioral\Observer\UsingSPL;

use Phpatterns\Behavioral\Observer\UsingSPL;
use PHPUnit_Framework_TestCase;

class ProductPriceObserverTest extends PHPUnit_Framework_TestCase
{
    public function testObserverIsUpdated()
    {
        // Create a mock for the ProductPriceObserver class and only mock the update() method.
        $productPriceObserver = $this
            ->getMockBuilder(UsingSPL\ProductPriceObserver::class)
            ->setMethods(array('update'))
            ->getMock();

        // Set up the expectation for the update() method (called only once
        // and with an instance of SplSubject as its parameter).
        $productPriceObserver
            ->expects($this->once())
            ->method('update')
            ->with($this->isInstanceOf('SplSubject'));

        // Create the Product, attach the ProductPriceObserver object and notify it.
        $product = new UsingSPL\Product();
        $product->attach($productPriceObserver);
        $product->notify();
    }
}
