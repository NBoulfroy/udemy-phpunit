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
use \ReflectionClass;
use \ReflectionException;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();

        $this->assertNotEmpty($item->getDescription());
    }

    /**
     * First method to test protected methods from an object : using inheritance.
     */
    public function testIdIsInteger()
    {
        $item = new ItemChild();

        $this->assertIsInt($item->getID());
    }

    /**
     * Second method to test private methods from an object : using Reflection class.
     *
     * @throws ReflectionException
     */
    public function testTokenIsAString()
    {
        $item = new Item();

        // Creates a reflection class.
        $reflector = new ReflectionClass(Item::class);
        // Defines method concerned by this manipulation.
        $method = $reflector->getMethod('getToken');
        // Defines new method's accessing.
        $method->setAccessible(true);
        // Calls method with his returns value.
        $result = $method->invoke($item);

        $this->assertIsString($result);
    }

    public function testPrefixedTokenStartsWithPrefix()
    {
        $item = new Item();

        // Creates a reflection class.
        $reflector = new ReflectionClass(Item::class);
        // Defines method concerned by this manipulation.
        $method = $reflector->getMethod('getPrefixedToken');
        // Defines new method's accessing.
        $method->setAccessible(true);
        // Calls method with his returns value.
        $result = $method->invoke($item, 'example');
        // Other solution to realise it.
//        $result = $method->invokeArgs($item, ['example']);

        $this->assertStringStartsWith('example', $result);
    }
}
