<?php

namespace Phpatterns\Creational\AbstractFactory;

abstract class AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return BeerInterface
     */
    abstract public function createBeer();

    /**
     * Creates a nice Cocktail
     * @return CocktailInterface
     */
    abstract public function createCocktail();
}
