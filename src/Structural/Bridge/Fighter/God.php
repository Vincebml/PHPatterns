<?php

namespace Phpatterns\Structural\Bridge\Fighter;

use Phpatterns\Structural\Bridge;

class God extends Bridge\AbstractFighter
{
    /**
     * @param string $name
     * @param Bridge\WeaponInterface $weapon
     */
    public function __construct($name, Bridge\WeaponInterface $weapon)
    {
        parent::__construct($name, $weapon);
        $this->force = 150.0;
        $this->life = 200.0;
    }

    /**
     * Move the fighter
     * @return string
     */
    public function move()
    {
        return 'Moving by teleportation...';
    }
}
