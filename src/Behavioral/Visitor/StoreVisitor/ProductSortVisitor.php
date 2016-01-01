<?php

namespace Phpatterns\Behavioral\Visitor\StoreVisitor;

use Phpatterns\Behavioral\Visitor;
use Phpatterns\Behavioral\Visitor\Store;

class ProductSortVisitor implements Visitor\StoreVisitorInterface
{
    /**
     * Visit the Apple store and sort the products (ascending sort).
     * @param Store\AppleStore $store
     */
    public function visitApple(Store\AppleStore $store)
    {
        $products = $store->getProducts();
        sort($products);
        $store->setProducts($products);
    }

    /**
     * Visit the Amazon store and sort the products (descending sort).
     * @param Store\AmazonStore $store
     */
    public function visitAmazon(Store\AmazonStore $store)
    {
        $products = $store->getProducts();
        rsort($products);
        $store->setProducts($products);
    }
}
