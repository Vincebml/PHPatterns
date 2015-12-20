<?php

namespace Phpatterns\Creational\Builder\TrafficMap;

/**
 * Class TrafficMap
 * A map used to emphasize traffic congestion.
 */
class TrafficMap
{
    /** @var Point */
    private $origin;

    /** @var Point */
    private $destination;

    /** @var int */
    private $height;

    /** @var int */
    private $width;

    /** @var int */
    private $waterColor;

    /** @var int */
    private $groundColor;

    /** @var int */
    private $lowTrafficColor;

    /** @var int */
    private $mediumTrafficColor;

    /** @var int */
    private $highTrafficColor;

    /**
     * @param Point $origin
     * @param Point $destination
     */
    public function __construct(Point $origin = null, Point $destination = null)
    {
        $this->origin = $origin;
        $this->destination = $destination;

        //default values
        $this->height = 100;
        $this->width = 100;
        $this->waterColor = Color::CYAN;
        $this->groundColor = Color::BROWN;
        $this->lowTrafficColor = Color::YELLOW;
        $this->mediumTrafficColor = Color::ORANGE;
        $this->highTrafficColor = Color::RED;
    }

    /**
     * @param Point $origin
     * @return $this
     */
    public function setOrigin(Point $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @param Point $destination
     * @return $this
     */
    public function setDestination(Point $destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param int $color
     */
    public function setWaterColor($color)
    {
        $this->waterColor = $color;
    }

    /**
     * @param int $color
     */
    public function setGroundColor($color)
    {
        $this->groundColor = $color;
    }

    /**
     * @param int $color
     */
    public function setLowTrafficColor($color)
    {
        $this->lowTrafficColor = $color;
    }

    /**
     * @param int $color
     */
    public function setMediumTrafficColor($color)
    {
        $this->mediumTrafficColor = $color;
    }

    /**
     * @param int $color
     */
    public function setHighTrafficColor($color)
    {
        $this->highTrafficColor = $color;
    }
}
