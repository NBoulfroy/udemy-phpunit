<?php
/**
 * Queue
 *
 * A first-in, first-out data structure
 */

namespace Src;

class Queue
{
    /** @var array $items - Queue items */
    protected $items;

    /**
     * Queue constructor.
     */
    public function __construct()
    {
        $this->items = [];
    }

    /**
     * Add an item to the end of the queue
     *
     * @param int|string $item - The item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    /**
     * Take an item off the head of the queue
     *
     * @return int|string - The item
     */
    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * Get the total number of items in the queue
     *
     * @return int - The number of items
     */
    public function getCount(): int
    {
        return count($this->items);
    }

    /**
     * Reset items array.
     */
    public function clear(): void
    {
        $this->items = [];
    }
}
