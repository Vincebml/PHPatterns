<?php

namespace Phpatterns\Creational\FactoryMethod;

abstract class InformationMatrix
{
    /** @var int */
    protected $height;

    /** @var int */
    protected $length;

    public function __construct()
    {
        $this->height = 100;
        $this->length = 100;
    }

    /**
     * Set the height of the information matrix
     *
     * @param int $height
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Set the length of the information matrix
     *
     * @param int $length
     * @return $this
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }
}
