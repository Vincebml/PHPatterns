<?php

namespace Phpatterns\Structural\Adapter;

interface WeatherInterface
{
    /**
     * Get the weather for a given city (temperature, humidity and pressure only).
     * @param string $city
     * @return Weather
     */
    public function getWeather($city);
}
