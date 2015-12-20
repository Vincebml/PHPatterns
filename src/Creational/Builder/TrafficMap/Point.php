<?php

namespace Phpatterns\Creational\Builder\TrafficMap;

/**
 * Class Point
 * Represents a point in a Map
 */
class Point
{
    /** @var float */
    private $latitude;

    /** @var float */
    private $longitude;

    /**
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
