<?php

namespace Phpatterns\Structural\Flyweight\Bullet;

use Phpatterns\Structural\Flyweight;

class BlankBullet implements Flyweight\BulletInterface
{
    /** @var int */
    private $damage; //intrinsic state

    /** @var int */
    private $positionInMagazine = null; //extrinsic state

    public function __construct()
    {
        $this->damage = 0;
    }

    /**
     * Setting extrinsic state
     * @param int $positionInMagazine
     */
    public function setPositionInMagazine($positionInMagazine)
    {
        $this->positionInMagazine = $positionInMagazine;
    }

    /**
     * @return int
     */
    public function getPositionInMagazine()
    {
        return $this->positionInMagazine;
    }
}
