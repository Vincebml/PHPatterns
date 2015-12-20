<?php

namespace Phpatterns\Creational\FactoryMethod\Matrix;

use Phpatterns\Creational\FactoryMethod;

class Code128 extends FactoryMethod\InformationMatrix
{
    /** @var int */
    private $barLength;

    public function __construct()
    {
        parent::__construct();
        $this->barLength = 2;
    }

    /**
     * Set the bars' length for the Code 128 barcode
     *
     * @param int $barLength
     * @return $this
     */
    public function setBarLength($barLength)
    {
        $this->barLength = $barLength;
        return $this;
    }
}
