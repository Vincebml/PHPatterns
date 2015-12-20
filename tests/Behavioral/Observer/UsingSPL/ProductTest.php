<?php

namespace Test\Phpatterns\Behavioral\Observer\UsingSPL;

use Phpatterns\Behavioral\Observer\UsingSPL;
use PHPUnit_Framework_TestCase;

class ProductTest extends PHPUnit_Framework_TestCase
{
    public function testAttachDetachMethods()
    {
        $product = new UsingSPL\Product();
        $productPriceObserver = new UsingSPL\ProductPriceObserver();
        $observers = $product->getObservers();

        $this->assertInstanceOf('SplObjectStorage', $observers);
        $this->assertFalse(
            $observers->contains($productPriceObserver)
        );

        $product->attach($productPriceObserver);
        $this->assertTrue(
            $observers->contains($productPriceObserver)
        );

        $product->detach($productPriceObserver);
        $this->assertFalse(
            $observers->contains($productPriceObserver)
        );
    }

    /**
     * Testing if notify method is called when modifying the product's price
     */
    public function testNotifyCall()
    {
        $productMock = $this->getMock(
            UsingSPL\Product::class,
            array('notify')
        );

        $productMock
            ->expects($this->once())
            ->method('notify');

        /** @var $productMock UsingSPL\Product */
        $productMock->setPrice(25);
    }
}
