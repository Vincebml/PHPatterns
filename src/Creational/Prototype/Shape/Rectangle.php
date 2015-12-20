<?php

namespace Phpatterns\Creational\Prototype\Shape;

use Phpatterns\Creational\Prototype;

class Rectangle extends Prototype\AbstractShapePrototype
{
    /** @var int */
    private $width;

    /** @var int */
    private $height;

    public function __construct($x, $y, $width, $height)
    {
        parent::__construct($x, $y);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @param int $width
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Don't do anything, it's just a simple copy.
     */
    public function __clone()
    {

    }
}
