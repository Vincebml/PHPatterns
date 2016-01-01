<?php

namespace Phpatterns\Behavioral\Visitor;

abstract class AbstractStore
{
    /** @var array */
    protected $products;

    /**
     * The "double dispatch" mechanism will live here.
     * @param StoreVisitorInterface $visitor
     */
    abstract public function acceptVisitor(StoreVisitorInterface $visitor);

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param array $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }
}
