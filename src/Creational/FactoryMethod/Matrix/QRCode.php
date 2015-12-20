<?php

namespace Phpatterns\Creational\FactoryMethod\Matrix;

use Phpatterns\Creational\FactoryMethod;

class QRCode extends FactoryMethod\InformationMatrix
{
    /** @var string */
    private $template;

    public function __construct()
    {
        parent::__construct();
        $this->template = 'default';
    }

    /**
     * Set the template of the QR Code
     *
     * @param string $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = $template;
        return $this;
    }
}
