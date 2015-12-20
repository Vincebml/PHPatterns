<?php

namespace Test\Phpatterns\Behavioral\Memento;

use Phpatterns\Behavioral\Memento;

class MementoTest extends \PHPUnit_Framework_TestCase
{
    /** @var Memento\Order */
    private $order;

    protected function setUp()
    {
        //the Originator
        $this->order = new Memento\Order(
            'Mike Tyson',
            new Memento\OrderState(Memento\OrderState::ORDER_STATUS_PENDING)
        );
    }

    public function testUndoMechanism()
    {
        //the Caretaker
        $history = new Memento\History();
        $history->addMemento($this->order->exportState());

        //storing current state and changing Order's state
        $previousState = $this->order->getState();
        $this->order->setState(new Memento\OrderState(Memento\OrderState::ORDER_STATUS_PAID));
        $this->assertNotEquals($previousState, $this->order->getState());

        //restoring previous state
        $this->order->restoreState($history->popMemento());
        $this->assertEquals($previousState, $this->order->getState());
    }

    public function testMementoStateInstanceIsDifferentFromOrderState()
    {
        //the Caretaker
        $history = new Memento\History();
        $history->addMemento($this->order->exportState());

        $this->assertNotSame(
            $history->popMemento()->getState(),
            $this->order->getState()
        );
    }
}
