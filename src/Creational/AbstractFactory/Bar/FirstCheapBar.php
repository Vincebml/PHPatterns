<?php

namespace Phpatterns\Creational\AbstractFactory\Bar;

use Phpatterns\Creational\AbstractFactory;
use Phpatterns\Creational\AbstractFactory\Beer;
use Phpatterns\Creational\AbstractFactory\Cocktail;

class FirstCheapBar extends AbstractFactory\AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return AbstractFactory\BeerInterface
     */
    public function createBeer()
    {
        return new Beer\Budweiser();
    }

    /**
     * Creates a nice Cocktail
     * @return AbstractFactory\CocktailInterface
     */
    public function createCocktail()
    {
        return new Cocktail\LongIsland();
    }
}
