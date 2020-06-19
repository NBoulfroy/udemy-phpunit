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
    /** @var Queue $queue */
    private $queue;

    /**
     * Initialize fixture.
     */
    protected function setUp(): void
    {
        $this->queue = new Queue();

        parent::setUp();
    }

    /**
     * Destroy fixture.
     */
    public function tearDown(): void
    {
        unset($this->queue);

        parent::tearDown();
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $this->queue->push('green');

        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        $this->queue->pop();

        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertEquals('first', $this->queue->pop());
    }
}
