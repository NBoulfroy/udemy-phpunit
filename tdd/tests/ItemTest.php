<?php
/**
 *
 *
 * @Project : udemy-phpunit
 * @File    : ItemTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Item;
use Tdd\ItemChild;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    /**
     * First method to test protected methods from an object : creates an inheritance object which change the
     * method type.
     */
    public function testIdIsInteger()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getID());
    }

    public function testTokenIsAString()
    {
        $item = new ItemChild();

        $this->assertIsString($item->getToken());
    }
}
