<?php

namespace Test\Phpatterns\Behavioral\Iterator\WithoutSPL;

use Phpatterns\Behavioral\Iterator;
use Phpatterns\Behavioral\Iterator\WithoutSPL;

class IteratorTest extends \PHPUnit_Framework_TestCase
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

    /**
     * Testing the iterator mechanism
     */
    public function testIteratorMechanism()
    {
        $bottleDescriptions = ['Coca Cola - Soda', 'Château Rayas - Wine', 'Dom Pérignon - Champagne'];
        $bottleCrateIterator = new WithoutSPL\BottleCrateIterator($this->bottleCrate);

        for ($bottleCrateIterator->first(); !$bottleCrateIterator->isDone(); $bottleCrateIterator->next()) {
            $this->assertSame(
                array_shift($bottleDescriptions),
                $bottleCrateIterator->currentItem()->__toString()
            );
        }

        $this->setExpectedException('OutOfBoundsException', 'No more bottle in the crate.');
        $bottleCrateIterator->currentItem();
    }
}
