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
use Queue;
use Exception\QueueException;

class QueueTest extends TestCase
{
    /** @var Queue $queue */
    protected static $queue;

    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }

    public function setUp(): void
    {
        self::$queue->clear();
    }

    public static function tearDownAfterClass(): void
    {
        static::$queue = null;
    }

    public function tearDown(): void
    {
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, self::$queue->getCount());
    }

    /**
     * @throws QueueException
     */
    public function testAnItemIsAddedToTheQueue()
    {
        self::$queue->push('green');

        $this->assertEquals(1, self::$queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueue()
    {
        self::$queue->pop();

        $this->assertEquals(0, self::$queue->getCount());
    }

    /**
     * @throws QueueException
     */
    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        self::$queue->push('first');
        self::$queue->push('second');

        $this->assertEquals('first', self::$queue->pop());
    }

    /**
     * @return Queue
     *
     * @throws QueueException
     */
    public function testMaxNumberOfItemsCanBeAdded(): Queue
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; ++$i) {
            self::$queue->push($i);
        }

        $this->assertEquals(Queue::MAX_ITEMS, self::$queue->getCount());

        return self::$queue;
    }

    /**
     * @throws QueueException
     */
    public function testExceptionThrownWhenAddingAnItemToAFullQueue()
    {
        for ($i  = 0; $i < 10; ++$i) {
            if ($i >= Queue::MAX_ITEMS) {
                $this->expectException(QueueException::class);
            }

            self::$queue->push($i);
        }
    }
}
