<?php

namespace Phpatterns\Creational\AbstractFactory;

interface CocktailInterface
{
    /**
     * Name of the cocktail (Blue Lagoon, Long Island, Mojito, etc.)
     * @return string
     */
    public function getName();

    /**
     * Get all ingredients that were mixed to obtain that cocktail
     * @return array
     */
    public function getIngredients();
}
