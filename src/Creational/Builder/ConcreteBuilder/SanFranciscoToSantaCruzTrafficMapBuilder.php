<?php

namespace Phpatterns\Creational\Builder\ConcreteBuilder;

use Phpatterns\Creational\Builder;
use Phpatterns\Creational\Builder\TrafficMap;

class SanFranciscoToSantaCruzTrafficMapBuilder implements Builder\TrafficMapBuilderInterface
{
    /** @var TrafficMap\TrafficMap */
    protected $map;

    public function __construct()
    {
        $this->map = new TrafficMap\TrafficMap();
    }

    /**
     * @return TrafficMap\TrafficMap
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @return $this
     */
    public function setOrigin()
    {
        $this->map->setOrigin(
            new TrafficMap\Point(37.7749295, -122.41941550000001) // San Francisco
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function setDestination()
    {
        $this->map->setOrigin(
            new TrafficMap\Point(36.9741171, -122.03079630000002) // Santa Cruz
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function setHeight()
    {
        $this->map->setHeight(250);
        return $this;
    }

    /**
     * @return $this
     */
    public function setWidth()
    {
        $this->map->setWidth(150);
        return $this;
    }

    /**
     * @return $this
     */
    public function setWaterColor()
    {
        $this->map->setWaterColor(TrafficMap\Color::CYAN);
        return $this;
    }

    /**
     * @return $this
     */
    public function setGroundColor()
    {
        $this->map->setGroundColor(TrafficMap\Color::BLACK);
        return $this;
    }

    /**
     * @return $this
     */
    public function setLowTrafficColor()
    {
        //don't do anything and keep the default value from TrafficMap\TrafficMap's constructor
        return $this;
    }

    /**
     * @return $this
     */
    public function setMediumTrafficColor()
    {
        //don't do anything and keep the default value from TrafficMap\TrafficMap's constructor
        return $this;
    }

    /**
     * @return $this
     */
    public function setHighTrafficColor()
    {
        //don't do anything and keep the default value from TrafficMap\TrafficMap's constructor
        return $this;
    }
}
