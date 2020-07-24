<?php
/**
 *
 *
 * @Project : udemy-phpunit
 * @File    : ItemTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 * @Update  :
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Item;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    public function testIdIsInteger()
    {
        $item = new Item();

        $this->assertIsInt($item->getID());
    }
}
