<?php

namespace Phpatterns\Behavioral\TemplateMethod\OneManShow;

use Phpatterns\Behavioral\TemplateMethod\AbstractOneManShow;

class SecondOneManShow extends AbstractOneManShow
{
    /**
     * This method MUST be implemented
     */
    protected function doTheShow()
    {
        echo 'Second one man show!';
    }
}
