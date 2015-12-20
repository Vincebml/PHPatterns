<?php

namespace Test\Phpatterns\Structural\Bridge;

use Phpatterns\Structural\Bridge;
use Phpatterns\Structural\Bridge\Fighter;
use Phpatterns\Structural\Bridge\Weapon;

class BridgeTest extends \PHPUnit_Framework_TestCase
{
    /** @var Bridge\AbstractFighter */
    private $human;

    /** @var Bridge\AbstractFighter */
    private $god;

    protected function setUp()
    {
        $this->human = new Fighter\Human(
            'Jet Li',
            new Weapon\Knife()
        );

        $this->god = new Fighter\God(
            'Super Gun Man',
            new Weapon\Gun()
        );
    }

    public function testHumanAttack()
    {
        $this->assertSame('Attacking Super Gun Man with a knife!', $this->human->attack($this->god));
    }

    public function testGodAttack()
    {
        $this->assertSame('Attacking Jet Li with a gun!', $this->god->attack($this->human));
    }

    public function testHumanMove()
    {
        $this->assertSame('Running...', $this->human->move());
    }

    public function testGodMove()
    {
        $this->assertSame('Moving by teleportation...', $this->god->move());
    }
}
