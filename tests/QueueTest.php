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
    /**
     * @return Queue
     */
    public function testNewQueueIsEmpty(): Queue
    {
        $queue = new Queue();

        $this->assertEquals(0, $queue->getCount());

        return $queue;
    }

    /**
     * @param Queue $queue
     *
     * @return Queue
     *
     * @depends testNewQueueIsEmpty
     * Needs to pass parameter in function from defined previous method
     */
    public function testAnItemIsAddedToTheQueue(Queue $queue): Queue
    {
        $queue->push('green');

        $this->assertEquals(1, $queue->getCount());

        return $queue;
    }

    /**
     * @param Queue $queue
     *
     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
        $queue->pop();

        $this->assertEquals(0, $queue->getCount());
    }
}
