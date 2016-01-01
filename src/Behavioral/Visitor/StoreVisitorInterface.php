<?php

namespace Phpatterns\Behavioral\Visitor;

use Phpatterns\Behavioral\Visitor\Store;

interface StoreVisitorInterface
{
    /**
     * Visit the Apple store.
     * @param Store\AppleStore $store
     */
    public function visitApple(Store\AppleStore $store);

    /**
     * Visit the Amazon store.
     * @param Store\AmazonStore $store
     */
    public function visitAmazon(Store\AmazonStore $store);
}
