<?php

namespace Phpatterns\Structural\Flyweight;

use Phpatterns\Structural\Flyweight\Bullet;

class BulletFactory
{
    /** @var BulletInterface[] */
    private static $bullets  = [];

    /**
     * @param $type
     * @return BulletInterface
     */
    public static function getBullet($type)
    {
        if (! array_key_exists($type, self::$bullets)) {
            if ($type === 'BlankBullet') {
                self::$bullets[$type] = new Bullet\BlankBullet();
            } elseif ($type === 'ExpandingBullet') {
                self::$bullets[$type] = new Bullet\ExpandingBullet();
            }
        }

        return self::$bullets[$type];
    }
}
