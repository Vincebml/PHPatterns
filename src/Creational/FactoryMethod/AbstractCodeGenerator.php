<?php

namespace Phpatterns\Creational\FactoryMethod;

/**
 * It's the class that handles the Factory Method
 */
abstract class AbstractCodeGenerator
{
    const ONE_DIMENSIONAL = 1;
    const TWO_DIMENSIONAL = 2;

    /**
     * Create a new information matrix
     * (in our case : a QRCode or a DataMatrix or a Code128)
     *
     * @param int $type (one or two dimensional)
     * @return InformationMatrix
     */
    public function renderCode($type)
    {
        /** @var $code InformationMatrix */
        $code = $this->createCode($type);

        return $code
            ->setHeight(50)
            ->setLength(80);
    }

    /**
     * Abstract code creation. That method must be implemented by subclasses.
     *
     * @param int $type (one or two dimensional)
     * @return InformationMatrix
     */
    abstract protected function createCode($type);
}
