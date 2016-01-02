<?php

namespace Phpatterns\Behavioral\Iterator;

class Bottle
{
    /** @var string */
    private $name;

    /** @var string */
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "$this->name - $this->type";
    }
}
