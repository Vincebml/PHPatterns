<?php

namespace Test\Phpatterns\Creational\Singleton;

use Phpatterns\Creational\Singleton\Logger;

class LoggerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \ReflectionObject
     */
    private $reflectionObject;

    protected function setUp()
    {
        $this->reflectionObject = new \ReflectionObject(
            Logger::getInstance()
        );
    }

    /**
     * Assert that 2 Logger instances are equal
     */
    public function testSingleton()
    {
        $logger1 = Logger::getInstance();
        $logger2 = Logger::getInstance();

        $this->assertSame($logger1, $logger2);
    }

    /**
     * @param string $method
     * @dataProvider methodProvider
     */
    public function testPrivateMethods($method)
    {
        $reflectionMethod = $this->reflectionObject->getMethod($method);
        $this->assertTrue($reflectionMethod->isPrivate());
    }

    public function methodProvider()
    {
        return [
            ['__construct'],
            ['__clone'],
            ['__sleep'],
            ['__wakeup']
        ];
    }
}
