<?php

namespace Phpatterns\Creational\Prototype\Shape;

use Phpatterns\Creational\Prototype;

class Circle extends Prototype\AbstractShapePrototype
{
    /** @var int */
    private $radius;

    /** @var Prototype\Color */
    private $color;

    public function __construct($x, $y, $radius)
    {
        parent::__construct($x, $y);
        $this->radius = $radius;
    }

    /**
     * @param int $radius
     * @return $this
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
        return $this;
    }

    /**
     * @param Prototype\Color $color
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return Prototype\Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Making a deep copy of Circle because property 'color' is an object
     * Have a look at: http://php.net/manual/en/language.oop5.cloning.php
     */
    public function __clone()
    {
        $this->color = clone $this->color;
    }
}
