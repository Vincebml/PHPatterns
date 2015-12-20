<?php

namespace Test\Phpatterns\Creational\AbstractFactory;

use Phpatterns\Creational\AbstractFactory;
use Phpatterns\Creational\AbstractFactory\Bar;

class AbstractBarFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * All objects created must be instances of interfaces
     * (the client isn't aware of concrete classes)
     * @param AbstractFactory\AbstractBarFactory $barFactory
     * @dataProvider barFactoriesProvider
     */
    public function testBarFactories($barFactory)
    {
        $beer = $barFactory->createBeer();
        $this->assertInstanceOf(AbstractFactory\BeerInterface::class, $beer);

        $cocktail = $barFactory->createCocktail();
        $this->assertInstanceOf(AbstractFactory\CocktailInterface::class, $cocktail);
    }

    public function barFactoriesProvider()
    {
        return [
            [new Bar\FirstCheapBar()],
            [new Bar\SecondCheapBar()]
        ];
    }
}
