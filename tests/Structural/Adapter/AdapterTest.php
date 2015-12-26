<?php

namespace Test\Phpatterns\Structural\Adapter;

use Phpatterns\Structural\Adapter;
use Phpatterns\Structural\Adapter\FirstWeatherApi;
use Phpatterns\Structural\Adapter\SecondWeatherApi;

class AdapterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Testing the adapter mechanism
     * @param Adapter\WeatherInterface $weather
     * @dataProvider adapterProvider
     */
    public function testAdapterMechanism(Adapter\WeatherInterface $weather)
    {
        $this->assertInstanceOf(
            Adapter\Weather::class,
            $weather->getWeather('Paris')
        );
    }

    public function adapterProvider()
    {
        return [
            [
                new FirstWeatherApi\FirstWeatherApiAdapter(
                    new FirstWeatherApi\FirstWeatherApi()
                )
            ],
            [
                new SecondWeatherApi\SecondWeatherApiAdapter(
                    new SecondWeatherApi\SecondWeatherApi()
                )
            ]
        ];
    }
}
