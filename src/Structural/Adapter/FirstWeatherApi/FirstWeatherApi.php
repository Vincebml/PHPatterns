<?php

namespace Phpatterns\Structural\Adapter\FirstWeatherApi;

class FirstWeatherApi
{
    /**
     * Get the weather main metrics for a given city.
     * @param string $city
     * @return array
     *  array['temp']       Temperature (°C)
     *  array['pressure']   Atmospheric pressure (hPa)
     *  array['humidity']   Humidity (%)
     *  array['temp_min']   Minimum temperature at the moment (°C)
     *  array['temp_max']   Maximum temperature at the moment (°C)
     */
    public function getMainMetrics($city)
    {
        // ..
        // Do the necessary to call the first Weather API and get data for the given city.
        // ..

        return [
            'temp' => 10.5,
            'pressure' => 1016.8,
            'humidity' => 91,
            'temp_min' => 8.3,
            'temp_max' => 12.0,
        ];
    }
}
