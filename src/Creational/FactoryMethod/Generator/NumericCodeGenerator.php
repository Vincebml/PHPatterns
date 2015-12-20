<?php

namespace Phpatterns\Creational\FactoryMethod\Generator;

use Phpatterns\Creational\FactoryMethod;
use Phpatterns\Creational\FactoryMethod\Matrix;

/**
 * It's a factory used to create codes that can handle numeric data
 */
class NumericCodeGenerator extends FactoryMethod\AbstractCodeGenerator
{
    /**
     * Creates a code that can handle numeric data
     *
     * @param int $type (one or two dimensional)
     * @return FactoryMethod\InformationMatrix
     */
    protected function createCode($type)
    {
        if ($type === parent::ONE_DIMENSIONAL) {
            return (new Matrix\Code128())->setBarLength(5);
        } elseif ($type === parent::TWO_DIMENSIONAL) {
            return new Matrix\DataMatrix();
        } else {
            throw new \InvalidArgumentException("This type ($type) is not able to handle numeric data!");
        }
    }
}
