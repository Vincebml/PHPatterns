<?php

namespace Test\Phpatterns\Behavioral\Interpreter;

use Phpatterns\Behavioral\Interpreter;
use Phpatterns\Behavioral\Interpreter\Expression;

class InterpreterTest extends \PHPUnit_Framework_TestCase
{
    public function testInterpreterMechanismWithContext()
    {
        $firstContext = [
            'x' => new Expression\Number(9),
            'y' => new Expression\Number(3)
        ];
        $this->assertSame(
            30,
            (new Interpreter\Parser('3 x * y +'))->interpret($firstContext)
        );

        $secondContext = [
            'w' => new Expression\Number(10),
            'x' => new Expression\Number(3),
            'y' => new Expression\Number(7),
            'z' => new Expression\Number(4)
        ];
        $this->assertSame(
            628,
            (new Interpreter\Parser('w 5 x * * y + z *'))->interpret($secondContext)
        );
    }

    public function testInterpreterMechanismWithEmptyContext()
    {
        $this->assertSame(
            22,
            (new Interpreter\Parser('3 5 * 7 +'))->interpret([])
        );

        $this->assertSame(
            2600,
            (new Interpreter\Parser('3 5 2 * * 100 + 20 *'))->interpret([])
        );
    }

    public function testInterpreterMechanismWithMissingContext()
    {
        $this->setExpectedException('Exception', 'Missing context value!');
        (new Interpreter\Parser('3 x * y +'))->interpret(['x' => new Expression\Number(9)]);
    }
}
