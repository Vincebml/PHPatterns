<?php

namespace Phpatterns\Creational\AbstractFactory\Cocktail;

use Phpatterns\Creational\AbstractFactory\CocktailInterface;

class LongIsland implements CocktailInterface
{
    /** @var string */
    private $name;

    /** @var array */
    private $ingredients;

    public function __construct()
    {
        $this->name = 'Long Island';
        $this->ingredients = [
            'Tequila',
            'Vodka',
            'Light rum',
            'Triple sec',
            'Gin',
            'Coca-Cola'
        ];
    }

    /**
     * Name of the cocktail (Blue Lagoon, Long Island, Mojito, etc.)
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get all ingredients that were mixed to obtain that cocktail
     * @return array
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }
}
