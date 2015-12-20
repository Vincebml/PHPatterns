<?php

namespace Phpatterns\Creational\Prototype;

use Phpatterns\Creational\Prototype\Shape;

class ShapeManager
{
    /** @var Shape\Circle */
    private $circlePrototype;

    /** @var Shape\Rectangle */
    private $rectanglePrototype;

    /** @var array */
    private $shapes;

    public function __construct(Shape\Circle $circlePrototype, Shape\Rectangle $rectanglePrototype)
    {
        $this->circlePrototype = $circlePrototype;
        $this->rectanglePrototype = $rectanglePrototype;
        $this->shapes = [];
    }

    public function addCircle($x, $y, $radius)
    {
        /** @var $circleClone Shape\Circle */
        $circleClone = clone $this->circlePrototype;
        $this->shapes[] = $circleClone
            ->setX($x)
            ->setY($y)
            ->setRadius($radius);
    }

    public function addRectangle($x, $y, $width, $height)
    {
        /** @var $rectangleClone Shape\Rectangle */
        $rectangleClone = clone $this->rectanglePrototype;
        $this->shapes[] = $rectangleClone
            ->setX($x)
            ->setY($y)
            ->setWidth($width)
            ->setHeight($height);
    }

    /**
     * @return array
     */
    public function getShapes()
    {
        return $this->shapes;
    }

    /**
     * @return Shape\Circle
     */
    public function getCirclePrototype()
    {
        return $this->circlePrototype;
    }

    /**
     * @return Shape\Rectangle
     */
    public function getRectanglePrototype()
    {
        return $this->rectanglePrototype;
    }

    /**
     * @param array $shapes
     */
    public function setShapes($shapes)
    {
        $this->shapes = $shapes;
    }
}
