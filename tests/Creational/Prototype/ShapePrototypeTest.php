<?php

namespace Test\Phpatterns\Creational\Prototype;

use Phpatterns\Creational\Prototype;
use Phpatterns\Creational\Prototype\Shape;

class ShapePrototypeTest extends \PHPUnit_Framework_TestCase
{
    /** @var Prototype\ShapeManager */
    private $shapeManager;

    protected function setUp()
    {
        $this->shapeManager = new Prototype\ShapeManager(
            (new Shape\Circle(0, 0, 0))->setColor(
                new Prototype\Color(255, 255, 255) //white
            ),
            new Shape\Rectangle(0, 0, 0, 0)
        );
    }

    public function testCircleCloningMechanism()
    {
        $this->assertEmpty($this->shapeManager->getShapes());

        $this->shapeManager->addCircle(2, 5, 8);
        /** @var $circleClone Shape\Circle */
        $circleClone = $this->shapeManager->getShapes()[0];

        $this->assertNotEquals(
            $circleClone,
            $this->shapeManager->getCirclePrototype()
        );

        $this->assertNotSame(
            $circleClone->getColor(),
            $this->shapeManager->getCirclePrototype()->getColor()
        );

        $this->assertNotEmpty($this->shapeManager->getShapes());
    }

    public function testRectangleCloningMechanism()
    {
        $this->assertEmpty($this->shapeManager->getShapes());

        $this->shapeManager->addRectangle(7, 4, 100, 200);
        $this->assertNotEquals(
            $this->shapeManager->getShapes()[0],
            $this->shapeManager->getRectanglePrototype()
        );

        $this->assertNotEmpty($this->shapeManager->getShapes());
    }
}
