<?php

namespace Phpatterns\Structural\Flyweight;

class Gun
{
    /** @var BulletInterface[] */
    private $bullets;

    /** @var int */
    private $maxBullets;

    /**
     * @param int $maxBullets
     */
    public function __construct($maxBullets)
    {
        $this->bullets = [];
        $this->maxBullets = $maxBullets;
    }

    /**
     * @return BulletInterface[]
     */
    public function getBullets()
    {
        return $this->bullets;
    }

    /**
     * @return int
     */
    public function getMaxBullets()
    {
        return $this->maxBullets;
    }

    /**
     * @param string $bulletType
     */
    public function reload($bulletType)
    {
        for ($bulletsCount = count($this->bullets); $bulletsCount < $this->maxBullets; $bulletsCount++) {
            $this->bullets[] = BulletFactory::getBullet($bulletType);
        }
    }

    /**
     * @return string
     */
    public function fire()
    {
        if ($bulletsCount = count($this->bullets)) {
            /** @var BulletInterface $bullet */
            $bullet = array_shift($this->bullets);
            $bullet->setPositionInMagazine(($this->maxBullets - $bulletsCount) + 1);

            return sprintf(
                'Bullet n°%d fired! (%s)',
                $bullet->getPositionInMagazine(),
                get_class($bullet)
            );
        }

        return 'Reload gun!';
    }
}
