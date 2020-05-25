<?php
/**
 * FunctionsTest class.
 *
 * @Project : phpunit
 * @File    : FunctionsTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 */

namespace Tests;

use PHPUnit\Framework\TestCase;

require 'functions.php';

class FunctionsTest extends TestCase
{
    /**
     * Test function with valid parameters and valid returns (assertEquals).
     */
    public function testAddReturnsTheCorrectSum()
    {
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(8, add(4, 4));
    }

    /**
     * Test function with valid parameters and not valid returns (assertNotEquals).
     */
    public function testAddReturnsTheIncorrectSum()
    {
        $this->assertNotEquals(4, add(2, 1));
    }
}