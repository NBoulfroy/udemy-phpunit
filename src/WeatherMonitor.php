<?php
/**
 * WeatherMonitor class.
 *
 * @Project : udemy-phpunit
 * @File    : WeatherMonitor.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/02
 */

class WeatherMonitor
{
    /**
     * Temperature service.
     *
     * @var TemperatureService
     */
    protected $service;

    /**
     * WeatherMonitor constructor.
     *
     * @param TemperatureService $service
     *
     * @return void
     */
    public function __construct(TemperatureService $service)
    {
        $this->service = $service;
    }

    /**
     * Get the average temperature between two times.
     *
     * @param string $start Start time hh:mm
     * @param string $end End time hh:mm
     *
     * @return int
     */
    public function getAverageTemperature(string $start, string $end): int
    {
        $startTemp = $this->service->getTemperature($start);
        $endTemp = $this->service->getTemperature($end);

        return ($startTemp + $endTemp) / 2;
    }
}
