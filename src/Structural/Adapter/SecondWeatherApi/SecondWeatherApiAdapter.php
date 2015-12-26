<?php

namespace Phpatterns\Structural\Adapter\SecondWeatherApi;

use Phpatterns\Structural\Adapter;

class SecondWeatherApiAdapter implements Adapter\WeatherInterface
{
    /** @var SecondWeatherApi */
    private $secondWeatherApi;

    public function __construct(SecondWeatherApi $secondWeatherApi)
    {
        $this->secondWeatherApi = $secondWeatherApi;
    }

    /**
     * Get the weather for a given city.
     * @param string $city
     * @return Adapter\Weather
     */
    public function getWeather($city)
    {
        $this->secondWeatherApi->loadWeatherData($city);

        return new Adapter\Weather(
            $this->secondWeatherApi->getTemperature(),
            $this->secondWeatherApi->getHumidity(),
            $this->secondWeatherApi->getPressure()
        );
    }
}
