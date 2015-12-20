<?php

namespace Phpatterns\Structural\Bridge\Weapon;

use Phpatterns\Structural\Bridge;

class Gun implements Bridge\WeaponInterface
{
    /**
     * Perform an attack to the opponent
     * @param Bridge\AbstractFighter $opponent
     * @return string
     */
    public function attack(Bridge\AbstractFighter $opponent)
    {
        return sprintf(
            "Attacking %s with a gun!",
            $opponent->getName()
        );
    }
}
