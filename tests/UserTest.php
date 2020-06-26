<?php
/**
 * UserTest class.
 *
 * @Project : phpunit
 * @File    : UserTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Update  : 2020/06/26
 */

namespace Tests;

use User;
use PHPUnit\Framework\TestCase;
use Mailer;

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

    public function testNotificationIsSent()
    {
        $user = new User();

        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->method('sendMessage')
            ->willReturn(true);

        $user->email = 'nicolas@example.com';
        $user->setMailer($mockMailer);

        $this->assertTrue($user->notify('hello'));
    }
}
