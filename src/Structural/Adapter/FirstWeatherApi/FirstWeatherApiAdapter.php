<?php

namespace Phpatterns\Structural\Adapter\FirstWeatherApi;

use Phpatterns\Structural\Adapter;

class FirstWeatherApiAdapter implements Adapter\WeatherInterface
{
    /** @var FirstWeatherApi */
    private $firstWeatherApi;

    public function __construct(FirstWeatherApi $firstWeatherApi)
    {
        $this->firstWeatherApi = $firstWeatherApi;
    }

    /**
     * Get the weather for a given city.
     * @param string $city
     * @return Adapter\Weather
     */
    public function getWeather($city)
    {
        $mainMetrics = $this->firstWeatherApi->getMainMetrics($city);

        return new Adapter\Weather(
            (float) $mainMetrics['temp'],
            (float) $mainMetrics['humidity'],
            (float) $mainMetrics['pressure']
        );
    }
}
