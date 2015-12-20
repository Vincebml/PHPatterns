<?php

namespace Test\Phpatterns\Creational\Builder;

use Phpatterns\Creational\Builder;
use Phpatterns\Creational\Builder\ConcreteBuilder;
use Phpatterns\Creational\Builder\TrafficMap;

class TrafficMapDirectorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Builder\TrafficMapDirector
     */
    private $trafficMapDirector;

    protected function setUp()
    {
        $this->trafficMapDirector = new Builder\TrafficMapDirector();
    }

    /**
     * Testing if concrete builders implement TrafficMapBuilderInterface
     * @param Builder\TrafficMapBuilderInterface $builder
     * @dataProvider buildersProvider
     */
    public function testConcreteBuildersImplementBuilderInterface(Builder\TrafficMapBuilderInterface $builder)
    {
        $this->assertInstanceOf(Builder\TrafficMapBuilderInterface::class, $builder);
    }

    /**
     * Testing creation mechanism
     * @param Builder\TrafficMapBuilderInterface $builder
     * @dataProvider buildersProvider
     */
    public function testCreationMechanism(Builder\TrafficMapBuilderInterface $builder)
    {
        $this->assertInstanceOf(
            TrafficMap\TrafficMap::class,
            $this->trafficMapDirector->buildMap($builder)
        );
    }

    public function buildersProvider()
    {
        return [
            [new ConcreteBuilder\ParisToBerlinTrafficMapBuilder()],
            [new ConcreteBuilder\SanFranciscoToSantaCruzTrafficMapBuilder()]
        ];
    }
}
