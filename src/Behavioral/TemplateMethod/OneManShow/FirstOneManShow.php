<?php

namespace Phpatterns\Behavioral\TemplateMethod\OneManShow;

use Phpatterns\Behavioral\TemplateMethod\AbstractOneManShow;

class FirstOneManShow extends AbstractOneManShow
{
    /**
     * This method MUST be implemented
     */
    protected function doTheShow()
    {
        echo 'First one man show!';
    }

    /**
     * This method CAN be implemented if needed
     */
    protected function thankThePublic()
    {
        // ...
        // Modify the default behavior to thank the audience
        // ...
    }
}
