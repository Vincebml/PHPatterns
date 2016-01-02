<?php

namespace Phpatterns\Behavioral\Interpreter\Expression;

use Phpatterns\Behavioral\Interpreter;

class Number implements Interpreter\ExpressionInterface
{
    /** @var int */
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(array $context)
    {
        return $this->value;
    }
}
