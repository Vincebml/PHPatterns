<?php

namespace Phpatterns\Creational\AbstractFactory\Beer;

use Phpatterns\Creational\AbstractFactory\BeerInterface;

class Budweiser implements BeerInterface
{
    /** @var string */
    private $name;

    public function __construct()
    {
        $this->name = 'Budweiser';
    }

    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
