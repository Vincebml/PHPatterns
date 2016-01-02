<?php

namespace Test\Phpatterns\Behavioral\Iterator;

use Phpatterns\Behavioral\Iterator;

class BottleCrateTest extends \PHPUnit_Framework_TestCase
{
    /** @var Iterator\BottleCrate */
    private $bottleCrate;

    protected function setUp()
    {
        $this->bottleCrate = new Iterator\BottleCrate();
        $this->bottleCrate->addBottle(new Iterator\Bottle('Coca Cola', 'Soda'));
        $this->bottleCrate->addBottle(new Iterator\Bottle('Château Rayas', 'Wine'));
        $this->bottleCrate->addBottle(new Iterator\Bottle('Dom Pérignon', 'Champagne'));
    }

    public function testCount()
    {
        $this->assertEquals(3, $this->bottleCrate->getCount());
    }

    public function testAddBottleToTheCrate()
    {
        $this->bottleCrate->addBottle(new Iterator\Bottle('Coca Cola', 'Soda'));
        $this->assertEquals(4, $this->bottleCrate->getCount());
    }

    public function testRemoveExistingBottleFromTheCrate()
    {
        $this->bottleCrate->removeBottle($this->bottleCrate->getBottle(1));
        $this->assertEquals(2, $this->bottleCrate->getCount());
    }

    public function testRemoveNonExistingBottleFromTheCrate()
    {
        $this->bottleCrate->removeBottle(new Iterator\Bottle('Coca Cola', 'Soda'));
        $this->assertEquals(3, $this->bottleCrate->getCount());
    }

    public function testGetBottle()
    {
        $this->assertEquals(
            'Château Rayas - Wine',
            $this->bottleCrate->getBottle(1)
        );
    }
}
