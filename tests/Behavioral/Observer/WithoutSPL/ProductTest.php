<?php

namespace Test\Phpatterns\Behavioral\Observer\WithoutSPL;

use Phpatterns\Behavioral\Observer\WithoutSPL;
use PHPUnit_Framework_TestCase;

class ProductTest extends PHPUnit_Framework_TestCase
{
    public function testProductInstance()
    {
        $product = new WithoutSPL\Product();
        $this->assertInstanceOf(WithoutSPL\SubjectInterface::class, $product);
    }

    public function testAttachDetachMethods()
    {
        $product = new WithoutSPL\Product();
        $productPriceObserver = new WithoutSPL\ProductPriceObserver();
        $observers = &$product->getObservers();

        $this->assertTrue(is_array($observers));
        $this->assertFalse(
            in_array($productPriceObserver, $observers, true)
        );

        $product->attach($productPriceObserver);
        $this->assertTrue(
            in_array($productPriceObserver, $observers, true)
        );

        $product->detach($productPriceObserver);
        $this->assertFalse(
            in_array($productPriceObserver, $observers, true)
        );
    }

    /**
     * Testing if notify method is called when modifying the product's price
     */
    public function testNotifyCall()
    {
        $productMock = $this->getMock(
            WithoutSPL\Product::class,
            array('notify')
        );

        $productMock
            ->expects($this->once())
            ->method('notify');

        /** @var $productMock WithoutSPL\Product */
        $productMock->setPrice(25);
    }
}
