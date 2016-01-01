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
     */
    public function testToppingDecoratorConstructor()
    {
        /*
         * In PHP 7, a TypeError exception is thrown when arguments' types
         * passed to a function do not match their corresponding declared
         * parameters.
         * see http://php.net/manual/en/class.typeerror.php
         */
        if (version_compare(PHP_VERSION, '7', '>=')) {
            $this->setExpectedException('TypeError');
        } else {
            $this->setExpectedException('PHPUnit_Framework_Error');
        }

        $this->getMockForAbstractClass(
            Decorator\AbstractToppingDecorator::class,
            [new \stdClass()]
        );
    }

    /**
     * Testing the decorator mechanism + descriptions and prices
     * @param Decorator\BreadInterface $bread
     * @param Decorator\AbstractToppingDecorator $decorators
     * @param string $description
     * @param float $price
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
