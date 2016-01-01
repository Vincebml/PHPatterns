<?php

namespace Phpatterns\Behavioral\Visitor\Store;

use Phpatterns\Behavioral\Visitor;

class AmazonStore extends Visitor\AbstractStore
{
    public function __construct()
    {
        $this->products = ['1984 - George Orwell', 'Hamlet - William Shakespeare', 'The Stranger - Albert Camus'];
    }

    public function acceptVisitor(Visitor\StoreVisitorInterface $visitor)
    {
        $visitor->visitAmazon($this);
    }
}
