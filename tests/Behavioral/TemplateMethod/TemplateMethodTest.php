<?php

namespace Test\Phpatterns\Behavioral\Strategy;

use Phpatterns\Behavioral\TemplateMethod\OneManShow;

class TemplateMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testFirstOneManShow()
    {
        $firstOneManShow = new OneManShow\FirstOneManShow();
        $this->expectOutputString('First one man show!');
        $firstOneManShow->showMustGoOn();
    }
    public function testSecondOneManShow()
    {
        $secondOneManShow = new OneManShow\SecondOneManShow();
        $this->expectOutputString('Second one man show!');
        $secondOneManShow->showMustGoOn();
    }
}
