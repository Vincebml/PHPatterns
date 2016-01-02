<?php

namespace Phpatterns\Behavioral\Interpreter;

interface ExpressionInterface
{
    /**
     * @param array $context
     * @return int
     */
    public function interpret(array $context);
}
