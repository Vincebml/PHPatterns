<?php

namespace Phpatterns\Behavioral\Interpreter;

use Phpatterns\Behavioral\Interpreter\Expression;

class Parser
{
    /** @var ExpressionInterface */
    private $expressionTree;

    /**
     * @param string $strExpression
     */
    public function __construct($strExpression)
    {
        $expressionStack = [];
        foreach (explode(' ', $strExpression) as $part) {
            if ('*' === $part) {
                $right = array_pop($expressionStack);
                $left = array_pop($expressionStack);
                array_push($expressionStack, new Expression\Multiply($left, $right));
            } elseif ('+' === $part) {
                $right = array_pop($expressionStack);
                $left = array_pop($expressionStack);
                array_push($expressionStack, new Expression\Plus($left, $right));
            } elseif (is_numeric($part)) {
                array_push($expressionStack, new Expression\Number($part));
            } else {
                array_push($expressionStack, new Expression\Variable($part));
            }
        }

        $this->expressionTree = array_pop($expressionStack);
    }

    public function interpret(array $context)
    {
        return $this->expressionTree->interpret($context);
    }
}
