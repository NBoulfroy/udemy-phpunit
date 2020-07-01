<?php
/**
 * OrderTest class.
 *
 * @Project : udemy-phpunit
 * @File    : OrderTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/30
 * @Update  : 2020/07/01
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Order;

require 'vendor/autoload.php';

class OrderTest extends TestCase
{
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
            ->with($this->equalTo(200))
            ->willReturn(true);

        $order = new Order($gateway, 200);

        $this->assertTrue($order->process());
    }
}
