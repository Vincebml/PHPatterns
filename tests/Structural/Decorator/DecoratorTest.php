<?php

namespace Test\Phpatterns\Structural\Decorator;

use Phpatterns\Structural\Decorator;
use Phpatterns\Structural\Decorator\Bread;
use Phpatterns\Structural\Decorator\Topping;

class DecoratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Decorator pattern requirement: the decorator must implement BreadInterface interface
     */
    public function testToppingDecoratorImplementsBreadInterface()
    {
        $this->assertTrue(
            is_subclass_of(
                Decorator\AbstractToppingDecorator::class,
                Decorator\BreadInterface::class
            )
        );
    }

    /**
     * Decorator pattern requirement: the decorator must be type hinted
     * (with BreadInterface interface in our case)
     *
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testToppingDecoratorConstructor()
    {
        $this->getMockForAbstractClass(
            Decorator\AbstractToppingDecorator::class,
            [new \stdClass()]
        );
    }

    /**
     * Testing the decorator mechanism + descriptions and prices
     * @dataProvider decoratorProvider
     */
    public function testDecoratorMechanism($bread, $decorators, $description, $price)
    {
        /** @var $element Decorator\BreadInterface */
        $element = new $bread();

        foreach ($decorators as $decorator) {
            $element = new $decorator($element);
        }

        $this->assertSame($description, $element->getDescription());
        $this->assertSame($price, $element->getPrice());

    }

    public function decoratorProvider()
    {
        return [
            [
                Bread\ItalianBread::class,
                [Topping\Cheddar::class],
                'Italian bread, Cheddar',
                1.79
            ],
            [
                Bread\HoneyOatBread::class,
                [Topping\Bacon::class],
                'Honey Oat bread, Bacon',
                2.58
            ],
            [
                Bread\ItalianBread::class,
                [Topping\Cheddar::class, Topping\Cheddar::class, Topping\Bacon::class],
                'Italian bread, Cheddar, Cheddar, Bacon',
                3.17
            ],
            [
                Bread\HoneyOatBread::class,
                [],
                'Honey Oat bread',
                1.99
            ]
        ];
    }
}
