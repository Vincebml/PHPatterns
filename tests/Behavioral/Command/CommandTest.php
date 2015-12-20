<?php

namespace Test\Phpatterns\Behavioral\Command;

use Phpatterns\Behavioral\Command;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    /** @var Command\Door */
    private $door; //the Receiver

    protected function setUp()
    {
        $this->door = new Command\Door();
    }

    public function testLockCommand()
    {
        //the Invoker
        $controlStation = new Command\ControlStation(
            new Command\ConnectedHomeCommand\LockDoorCommand($this->door)
        );

        $this->expectOutputString('Door locked!');
        $controlStation->invoke();
    }

    public function testUnlockCommand()
    {
        //the Invoker
        $controlStation = new Command\ControlStation(
            new Command\ConnectedHomeCommand\UnlockDoorCommand($this->door)
        );

        $this->expectOutputString('Door unlocked!');
        $controlStation->invoke();
    }
}
