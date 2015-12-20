<?php

namespace Phpatterns\Structural\Bridge;

abstract class AbstractFighter
{
    /** @var string */
    protected $name;

    /** @var float */
    protected $life = 100.0;

    /** @var float */
    protected $force = 50.0;

    /** @var WeaponInterface */
    protected $weapon;

    /**
     * @param string $name
     * @param WeaponInterface $weapon
     */
    public function __construct($name, WeaponInterface $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    /**
     * Perform an attack to the opponent with a weapon
     * @param AbstractFighter $opponent
     * @return string
     */
    public function attack(AbstractFighter $opponent)
    {
        return $this->weapon->attack($opponent);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Move the fighter
     * @return string
     */
    abstract public function move();
}
