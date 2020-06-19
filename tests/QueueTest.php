<?php
/**
 * QueueTest class.
 *
 * @Project : udemy-phpunit
 * @File    : QueueTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/19
 */

require 'vendor/autoload.php';

use PhpUnit\Framework\TestCase;
use Src\Queue;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue();
        $queue->push('green');

        $this->assertEquals(1, $queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        $queue = new Queue();
        $queue->push('green');
        $queue->pop();

        $this->assertEquals(0, $queue->getCount());
    }
}
