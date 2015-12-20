<?php

namespace Phpatterns\Behavioral\Command;

/**
 * Class ControlStation used as the Invoker (part of the Command pattern)
 */
class ControlStation
{
    /** @var ConnectedHomeCommandInterface */
    private $command;

    /**
     * If you need a list of commands, you should use a 'addCommand' method
     * instead of the constructor
     * @param ConnectedHomeCommandInterface $command
     */
    public function __construct(ConnectedHomeCommandInterface $command)
    {
        $this->command = $command;
    }

    /**
     * Here, we execute an action through the a Command object
     * (ControlStation and Door objects are decoupled)
     */
    public function invoke()
    {
        $this->command->execute();
    }

    /**
     * @param ConnectedHomeCommandInterface $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }
}
