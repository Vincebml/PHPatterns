<?php

namespace Phpatterns\Behavioral\Command;

interface ConnectedHomeCommandInterface
{
    /**
     * This is the place where we will deal with the Receiver
     * (calling one or several methods, etc.)
     */
    public function execute();
}
