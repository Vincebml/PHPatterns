<?php

namespace Phpatterns\Creational\Builder;

use Phpatterns\Creational\Builder\TrafficMap;

class TrafficMapDirector
{
    /**
     * The director constructs a TrafficMap using the TrafficMapBuilderInterface
     * (he knows nothing about the concrete details of the creation)
     * @param TrafficMapBuilderInterface $builder
     * @return TrafficMap\TrafficMap
     */
    public function buildMap(TrafficMapBuilderInterface $builder)
    {
        return $builder
            ->setOrigin()
            ->setDestination()
            ->setHeight()
            ->setWidth()
            ->setWaterColor()
            ->setGroundColor()
            ->setLowTrafficColor()
            ->setMediumTrafficColor()
            ->setHighTrafficColor()
            ->getMap();
    }
}
