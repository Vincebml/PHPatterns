<?php

namespace Phpatterns\Structural\Flyweight;

interface BulletInterface
{
    /**
     * @param int $position
     */
    public function setPositionInMagazine($position);

    /**
     * @return int
     */
    public function getPositionInMagazine();
}
