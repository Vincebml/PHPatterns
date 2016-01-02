<?php

namespace Test\Phpatterns\Behavioral\Iterator\UsingSPL;

use Phpatterns\Behavioral\Iterator;
use Phpatterns\Behavioral\Iterator\UsingSPL;

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
        $bottleCrateIterator = new UsingSPL\BottleCrateIterator($this->bottleCrate);

        while ($bottleCrateIterator->valid()) {
            $this->assertSame(
                $bottleDescriptions[$bottleCrateIterator->key()],
                $bottleCrateIterator->current()->__toString()
            );
            $bottleCrateIterator->next();
        }

        $this->assertEquals(3, $bottleCrateIterator->key());
        $bottleCrateIterator->rewind();
        $this->assertEquals(0, $bottleCrateIterator->key());
    }
}
