<?php
/**
 * OrderTest class.
 *
 * @Project : udemy-phpunit
 * @File    : OrderTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/30
 * @Update  : 2020/07/02
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Order;
use Mockery;

require 'vendor/autoload.php';

class OrderTest extends TestCase
{
    public function tearDown(): void
    {
        Mockery::close();
    }

    /**
     * Test function uses a non existent object to test an other object which needs this one.
     */
    public function testOrderIsProcessed()
    {
        $gateway = $this->getMockBuilder('PaymentGateway')
            ->setMethods(['charge'])
            ->getMock();
        $gateway
            ->expects($this->once())
            ->method('charge')
            ->with($this->equalTo(600))
            ->willReturn(true);

        $order = new Order(200, 3);

        $this->assertTrue($order->process($gateway));
    }

    /**
     * Same test previous but with Mockery library.
     *
     * @see http://docs.mockery.io/en/latest/index.html
     */
    public function testOrderIsProcessedUsingMockery()
    {
        $gateway = Mockery::mock('PaymentGateway');
        $gateway->shouldReceive('charge')
            ->once()
            ->with(300)
            ->andReturn(true)
        ;

        $order = new Order(200, 1.5);

        $this->assertTrue($order->process($gateway));
    }

    /**
     * Function test what happened after the code and the test is called and not before.
     */
    public function testOrderIsProcessedUsingUsingSpy()
    {
        $order = new Order(3, 1.99);

        $this->assertEquals(5.97, $order->amount);

        $gatewaySpy = Mockery::spy('PaymentGateway');

        $order->process($gatewaySpy);

        $gatewaySpy->shouldHaveReceived('charge')
            ->once()
            ->with(5.97)
        ;
    }
}
