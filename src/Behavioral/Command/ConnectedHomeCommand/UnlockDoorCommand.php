<?php

namespace Phpatterns\Behavioral\Command\ConnectedHomeCommand;

use Phpatterns\Behavioral\Command;

class UnlockDoorCommand implements Command\ConnectedHomeCommandInterface
{
    /** @var Command\Door */
    private $door;

    /**
     * @param Command\Door $door
     */
    public function __construct(Command\Door $door)
    {
        $this->door = $door;
    }

    /**
     * Tell the Receiver (the Door) to unlock itself
     */
    public function execute()
    {
        $this->door->unlock();
    }
}
