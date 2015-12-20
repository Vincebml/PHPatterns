<?php

namespace Phpatterns\Creational\Prototype;

abstract class AbstractShapePrototype
{
    /** @var int */
    protected $x;

    /** @var int */
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @param int $x
     * @return $this
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }

    /**
     * @param int $y
     * @return $this
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Subclasses must implement that method
     */
    abstract public function __clone();
}
