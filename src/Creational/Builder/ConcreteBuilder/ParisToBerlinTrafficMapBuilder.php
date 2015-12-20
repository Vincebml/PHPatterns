<?php

namespace Phpatterns\Creational\Builder\ConcreteBuilder;

use Phpatterns\Creational\Builder;
use Phpatterns\Creational\Builder\TrafficMap;

class ParisToBerlinTrafficMapBuilder implements Builder\TrafficMapBuilderInterface
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
            new TrafficMap\Point(48.856614, 2.3522219000000177) // Paris
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function setDestination()
    {
        $this->map->setOrigin(
            new TrafficMap\Point(52.52000659999999, 13.404953999999975) // Berlin
        );
        return $this;
    }

    /**
     * @return $this
     */
    public function setHeight()
    {
        $this->map->setHeight(100);
        return $this;
    }

    /**
     * @return $this
     */
    public function setWidth()
    {
        $this->map->setWidth(200);
        return $this;
    }

    /**
     * @return $this
     */
    public function setWaterColor()
    {
        $this->map->setWaterColor(TrafficMap\Color::BLUE);
        return $this;
    }

    /**
     * @return $this
     */
    public function setGroundColor()
    {
        $this->map->setGroundColor(TrafficMap\Color::DARK_GRAY);
        return $this;
    }

    /**
     * @return $this
     */
    public function setLowTrafficColor()
    {
        $this->map->setLowTrafficColor(TrafficMap\Color::LIGHT_GRAY);
        return $this;
    }

    /**
     * @return $this
     */
    public function setMediumTrafficColor()
    {
        $this->map->setMediumTrafficColor(TrafficMap\Color::MAGENTA);
        return $this;
    }

    /**
     * @return $this
     */
    public function setHighTrafficColor()
    {
        $this->map->setHighTrafficColor(TrafficMap\Color::ORANGE);
        return $this;
    }
}
