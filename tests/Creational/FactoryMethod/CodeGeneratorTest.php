<?php

namespace Test\Phpatterns\Creational\FactoryMethod;

use Phpatterns\Creational\FactoryMethod;
use Phpatterns\Creational\FactoryMethod\Generator;

class CodeGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Generator\BinaryCodeGenerator
     */
    private $binaryGenerator;

    /**
     * @var Generator\NumericCodeGenerator
     */
    private $numericGenerator;

    /**
     * @var array
     */
    private $types;

    protected function setUp()
    {
        $this->binaryGenerator = new Generator\BinaryCodeGenerator();
        $this->numericGenerator = new Generator\NumericCodeGenerator();

        $this->types = [
            'one' => FactoryMethod\AbstractCodeGenerator::ONE_DIMENSIONAL,
            'two' => FactoryMethod\AbstractCodeGenerator::TWO_DIMENSIONAL
        ];
    }

    /**
     * Testing that concrete factories extend CodeGenerator abstract class
     */
    public function testConcreteFactoriesSuperClass()
    {
        $concreteGenerators = [
            $this->binaryGenerator,
            $this->numericGenerator
        ];

        foreach ($concreteGenerators as $generator) {
            $this->assertInstanceOf(FactoryMethod\AbstractCodeGenerator::class, $generator);
        }
    }

    /**
     * Testing information matrix creation mechanism using binary data
     */
    public function testCreationMechanismWithBinaryData()
    {
        $this->setExpectedException(
            "InvalidArgumentException",
            "This type ({$this->types['one']}) is not able to handle binary data!"
        );
        $this->binaryGenerator->renderCode($this->types['one']);

        $this->assertInstanceOf(
            FactoryMethod\InformationMatrix::class,
            $this->binaryGenerator->renderCode($this->types['two'])
        );

        $this->setExpectedException(
            "InvalidArgumentException",
            "This type (whatever) is not able to handle binary data!"
        );
        $this->binaryGenerator->renderCode('whatever');
    }

    /**
     * Testing information matrix creation mechanism using numeric data
     */
    public function testCreationMechanismWithNumericData()
    {
        $this->assertInstanceOf(
            FactoryMethod\InformationMatrix::class,
            $this->numericGenerator->renderCode($this->types['one'])
        );

        $this->assertInstanceOf(
            FactoryMethod\InformationMatrix::class,
            $this->numericGenerator->renderCode($this->types['two'])
        );

        $this->setExpectedException(
            "InvalidArgumentException",
            "This type (whatever) is not able to handle numeric data!"
        );
        $this->numericGenerator->renderCode('whatever');
    }
}
