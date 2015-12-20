<?php

namespace Phpatterns\Structural\Bridge\Fighter;

use Phpatterns\Structural\Bridge;

class Human extends Bridge\AbstractFighter
{
    /**
     * @param string $name
     * @param Bridge\WeaponInterface $weapon
     */
    public function __construct($name, Bridge\WeaponInterface $weapon)
    {
        parent::__construct($name, $weapon);
        $this->force = 100.0;
    }

    /**
     * Move the fighter
     * @return string
     */
    public function move()
    {
        return 'Running...';
    }
}
