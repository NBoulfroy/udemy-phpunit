<?php
/**
 * WeatherMonitorTest class.
 *
 * @Project : udemy-phpunit
 * @File    : WeatherMonitorTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/02
 */

namespace Test;

use TemperatureService;
use WeatherMonitor;
use PHPUnit\Framework\TestCase;
use Mockery;

require 'vendor/autoload.php';

class WeatherMonitorTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * Test function which uses an empty method (no code) from a dependency.
     */
    public function testCorrectAverageIsReturned()
    {
        // Define results return my mock object.
        $map = [
            ['12:00', 20],
            ['14:00', 26],
        ];

        // Create mock object.
        $service = $this->createMock(TemperatureService::class);
        // Define method & values return.
        $service
            ->expects($this->exactly(2))
            ->method('getTemperature')
            ->will($this->returnValueMap($map))
        ;

        $weather = new WeatherMonitor($service);

        $this->assertEquals(23, $weather->getAverageTemperature('12:00', '14:00'));
    }

    /**
     * Same test previous but with Mockery library.
     *
     * @see http://docs.mockery.io/en/latest/index.html
     */
    public function testCorrectAverageIsReturnedWithMockery()
    {
        // Create mock object.
        $service = Mockery::mock(TemperatureService::class);
        // Define first result.
        $service->shouldReceive('getTemperature')
            ->once()
            ->with('12:00')
            ->andReturn(20)
        ;
        // Define second result.
        $service->shouldReceive('getTemperature')
            ->once()
            ->with('14:00')
            ->andReturn(26)

        ;

        $weather = new WeatherMonitor($service);

        $this->assertEquals(23, $weather->getAverageTemperature('12:00', '14:00'));
    }
}
