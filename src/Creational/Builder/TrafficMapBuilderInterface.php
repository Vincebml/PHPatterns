<?php

namespace Phpatterns\Creational\Builder;

interface TrafficMapBuilderInterface
{
    /**
     * @return TrafficMap\TrafficMap
     */
    public function getMap();

    /**
     * @return $this
     */
    public function setOrigin();

    /**
     * @return $this
     */
    public function setDestination();

    /**
     * @return $this
     */
    public function setHeight();

    /**
     * @return $this
     */
    public function setWidth();

    /**
     * @return $this
     */
    public function setWaterColor();

    /**
     * @return $this
     */
    public function setGroundColor();

    /**
     * @return $this
     */
    public function setLowTrafficColor();

    /**
     * @return $this
     */
    public function setMediumTrafficColor();

    /**
     * @return $this
     */
    public function setHighTrafficColor();
}
