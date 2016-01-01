<?php

namespace Phpatterns\Behavioral\Visitor\Store;

use Phpatterns\Behavioral\Visitor;

class AppleStore extends Visitor\AbstractStore
{
    public function __construct()
    {
        $this->products = ['MacBook Air', 'Mac Pro', 'Apple Watch'];
    }

    public function acceptVisitor(Visitor\StoreVisitorInterface $visitor)
    {
        $visitor->visitApple($this);
    }
}
