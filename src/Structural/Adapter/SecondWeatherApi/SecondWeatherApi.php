<?php

namespace Phpatterns\Structural\Adapter\SecondWeatherApi;

class SecondWeatherApi
{
    /** @var \SimpleXMLElement */
    private $weatherData = null;

    /**
     * Get the weather data for a given city.
     * @param string $city
     */
    public function loadWeatherData($city)
    {
        $id = $this->getIDFromCity($city);

        // ...
        // Do the necessary to call the second Weather API and get data for the given city ID.
        // ...

        $xmlResponse = <<<'EOD'
<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
<rss version="2.0" xmlns:yweather="http://xml.weather.yahoo.com/ns/rss/1.0">
    <channel>
        <title>Weather - Paris, FR</title>
        <yweather:atmosphere humidity="93"  visibility="9.99"  pressure="1015.92"  rising="2" />
        <item>
            <title>Conditions for Paris, FR at 10:30 am CET</title>
            <yweather:condition  text="Partly Cloudy"  temp="9"  date="Sat, 26 Dec 2015 10:30 am CET" />
        </item>
    </channel>
</rss>
EOD;

        $this->weatherData = simplexml_load_string($xmlResponse);
    }

    /**
     * Retrieve ID for a city.
     * (Example : Spatial entities provided by Yahoo! GeoPlanet are referenced by a 32-bit
     * identifier: the Where On Earth ID (WOEID))
     * Have a look at: https://developer.yahoo.com/geo/geoplanet
     * @param $city
     * @return int
     */
    private function getIDFromCity($city)
    {
        // ...
        // use Yahoo! GeoPlanet API (or another one) to retrieve the ID for $city
        // ...

        // ID set manually to Paris - France for the example
        $id = 615702;
        return $id;
    }

    /**
     * Get the temperature for the loaded city
     * @return float | null if no data
     */
    public function getTemperature()
    {
        if ($this->weatherData) {
            $conditions = $this->weatherData->channel->item->xpath('yweather:condition');
            return (float) $conditions[0]->attributes()->temp;
        }

        return null;
    }

    /**
     * Get the humidity for the loaded city
     * @return float | null if no data
     */
    public function getHumidity()
    {
        if ($this->weatherData) {
            $atmosphere = $this->weatherData->channel->xpath('yweather:atmosphere');
            return (float) $atmosphere[0]->attributes()->humidity;
        }

        return null;
    }

    /**
     * Get the pressure for the loaded city
     * @return float | null if no data
     */
    public function getPressure()
    {
        if ($this->weatherData) {
            $atmosphere = $this->weatherData->channel->xpath('yweather:atmosphere');
            return (float) $atmosphere[0]->attributes()->pressure;
        }

        return null;
    }
}
