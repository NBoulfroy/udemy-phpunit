<?php
/**
 * ExampleTest class.
 *
 * @Project : phpunit
 * @File    : ExampleTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Basic test with one assertion, without type (assertEquals).
     */
    public function testAddingTwoPLusTwoResultsFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
