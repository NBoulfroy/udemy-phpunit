<?php
/**
 *
 *
 * @Project : udemy-phpunit
 * @File    : ProductTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Product;
use \ReflectionClass;
use \ReflectionException;

class ProductTest extends TestCase
{
    /**
     * Returns value from non public property with ReflectionClass object.
     *
     * @throws ReflectionException
     */
    public function testIDIsAnInteger()
    {
        $product = new Product();

        // Creates a reflection class.
        $reflector = new ReflectionClass(Product::class);
        // Defines attribute concerned by this manipulation.
        $property = $reflector->getProperty('productId');
        // Defines new attribute's accessing.
        $property->setAccessible(true);
        // Gets attribute's value.
        $value = $property->getValue($product);

        $this->assertIsInt($value);
    }
}
