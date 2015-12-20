<?php

namespace Phpatterns\Structural\Bridge;

interface WeaponInterface
{
    /**
     * Perform an attack to the opponent
     * @param AbstractFighter $opponent
     * @return string
     */
    public function attack(AbstractFighter $opponent);
}
