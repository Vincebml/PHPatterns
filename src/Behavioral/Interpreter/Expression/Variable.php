<?php

namespace Phpatterns\Behavioral\Interpreter\Expression;

use Phpatterns\Behavioral\Interpreter;

class Variable implements Interpreter\ExpressionInterface
{
    /** @var string */
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function interpret(array $context)
    {
        if (isset($context[$this->name])) {
            return $context[$this->name]->interpret($context);
        }

        throw new \Exception('Missing context value!');
    }
}
