<?php

namespace Phpatterns\Creational\FactoryMethod\Generator;

use Phpatterns\Creational\FactoryMethod;
use Phpatterns\Creational\FactoryMethod\Matrix;

/**
 * It's a factory used to create codes that can handle binary data
 */
class BinaryCodeGenerator extends FactoryMethod\AbstractCodeGenerator
{
    /**
     * Creates a code that can handle binary data
     *
     * @param int $type (one or two dimensional)
     * @return FactoryMethod\InformationMatrix
     */
    protected function createCode($type)
    {
        if ($type === parent::TWO_DIMENSIONAL) {
            return (new Matrix\QRCode())->setTemplate('binary');
        } else {
            throw new \InvalidArgumentException("This type ($type) is not able to handle binary data!");
        }
    }
}
