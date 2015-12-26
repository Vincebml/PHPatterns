<?php

namespace Phpatterns\Structural\Adapter;

class Weather
{
    /** @var float */
    private $temperature;

    /** @var float */
    private $humidity;

    /** @var float */
    private $pressure;

    public function __construct($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
    }
}
