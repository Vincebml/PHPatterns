<?php

namespace Phpatterns\Behavioral\Command;

/**
 * Class Door used as the Receiver (part of the Command pattern)
 */
class Door
{
    public function unlock()
    {
        echo 'Door unlocked!';
    }

    public function lock()
    {
        echo 'Door locked!';
    }
}
