<?php

namespace Test\Phpatterns\Behavioral\Visitor;

use Phpatterns\Behavioral\Visitor;
use Phpatterns\Behavioral\Visitor\Store;
use Phpatterns\Behavioral\Visitor\StoreVisitor;

class VisitorTest extends \PHPUnit_Framework_TestCase
{
    /** @var Visitor\StoreVisitorInterface */
    private $storeVisitor;

    protected function setUp()
    {
        $this->storeVisitor = new StoreVisitor\ProductSortVisitor();
    }

    /**
     * Testing the visitor mechanism
     * @param Store\AmazonStore $store
     * @param array $products
     * @dataProvider storeProvider
     */
    public function testVisitorMechanism($store, $products)
    {
        $this->assertNotSame($products, $store->getProducts());
        $store->acceptVisitor($this->storeVisitor);
        $this->assertSame($products, $store->getProducts());
    }

    public function storeProvider()
    {
        return [
            [
                new Store\AmazonStore(),
                ['The Stranger - Albert Camus', 'Hamlet - William Shakespeare', '1984 - George Orwell']
            ],
            [
                new Store\AppleStore(),
                ['Apple Watch', 'Mac Pro', 'MacBook Air']
            ]
        ];
    }
}
