<?php
/**
 * UserTest class.
 *
 * @Project : phpunit
 * @File    : UserTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Update  : 2020/06/12
 */

namespace Tests;

use Src\User;
use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';

class UserTest extends TestCase
{
    /**
     * Test function with attributes setting.
     */
    public function testReturnsFullName()
    {
        $user = new User();
        $user->firstName = 'Nicolas';
        $user->lastName = 'BOULFROY';

        $this->assertEquals('Nicolas BOULFROY', $user->getFullName());
    }

    /**
     * Test function with no attributes setting.
     *
     * @test
     */
    public function full_name_isEmptyByDefault()
    {
        $user = new User();

        $this->assertEquals('', $user->getFullName());
    }
}
