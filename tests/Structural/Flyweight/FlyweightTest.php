<?php

namespace Test\Phpatterns\Structural\Flyweight;

use Phpatterns\Structural\Flyweight;

class FlyweightTest extends \PHPUnit_Framework_TestCase
{
    public function testReloading()
    {
        $gun = new Flyweight\Gun(6);

        $this->assertEmpty($gun->getBullets());
        $gun->reload('ExpandingBullet');

        $this->assertEquals(
            $gun->getMaxBullets(),
            count($gun->getBullets())
        );
    }

    /**
     * Testing only one instance of BlankBullet has been created
     */
    public function testBulletsAreSameObject()
    {
        $gun = new Flyweight\Gun(4);
        $gun->reload('BlankBullet');

        foreach ($gun->getBullets() as $bullet) {
            $this->assertSame(
                Flyweight\BulletFactory::getBullet('BlankBullet'),
                $bullet
            );
        }
    }

    public function testExtrinsicState()
    {
        $gun = new Flyweight\Gun(2);
        $gun->reload('BlankBullet');

        $this->assertSame(
            'Bullet n°1 fired! (Phpatterns\Structural\Flyweight\Bullet\BlankBullet)',
            $gun->fire()
        );

        $this->assertSame(
            'Bullet n°2 fired! (Phpatterns\Structural\Flyweight\Bullet\BlankBullet)',
            $gun->fire()
        );

        $this->assertSame(
            'Reload gun!',
            $gun->fire()
        );
    }
}
