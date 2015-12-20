<?php

namespace Phpatterns\Creational\Prototype;

class Color
{
    /** @var int */
    private $red;

    /** @var int */
    private $green;

    /** @var int */
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    /**
     * @param int $red
     * @return $this
     */
    public function setRed($red)
    {
        $this->red = $red;
        return $this;
    }

    /**
     * @param int $green
     * @return $this
     */
    public function setGreen($green)
    {
        $this->green = $green;
        return $this;
    }

    /**
     * @param int $blue
     * @return $this
     */
    public function setBlue($blue)
    {
        $this->blue = $blue;
        return $this;
    }
}
