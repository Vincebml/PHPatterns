<?php

namespace Phpatterns\Creational\AbstractFactory\Cocktail;

use Phpatterns\Creational\AbstractFactory\CocktailInterface;

class Mojito implements CocktailInterface
{
    /** @var string */
    private $name;

    /** @var array */
    private $ingredients;

    public function __construct()
    {
        $this->name = 'Mojito';
        $this->ingredients = [
            'White rum',
            'Sugar cane juice',
            'Lime juice',
            'Sparkling water',
            'Mint'
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
