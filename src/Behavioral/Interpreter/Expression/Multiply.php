<?php

namespace Phpatterns\Behavioral\Interpreter\Expression;

use Phpatterns\Behavioral\Interpreter;

class Multiply implements Interpreter\ExpressionInterface
{
    /** @var Number */
    private $left;

    /** @var Number */
    private $right;

    public function __construct(Interpreter\ExpressionInterface $left, Interpreter\ExpressionInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret(array $context)
    {
        return $this->left->interpret($context) * $this->right->interpret($context);
    }
}
