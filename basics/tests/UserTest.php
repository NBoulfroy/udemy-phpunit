<?php
/**
 * UserTest class.
 *
 * @Project : phpunit
 * @File    : UserTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Update  : 2020/07/03
 */

namespace Tests;

use Basic\Exception\MailerException;
use Basic\User;
use PHPUnit\Framework\TestCase;
use Basic\Mailer;

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

    /**
     * Test function with basic mock object creation.
     */
    public function testNotificationIsSent()
    {
        $user = new User();
        $mockMailer = $this->createMock(Mailer::class);

        $mockMailer
            ->expects($this->once())
            ->method('sendMessage')
            ->with($this->equalTo('nicolas@example.com'), $this->equalTo('Hello'))
            ->willReturn(true);

        $user->email = 'nicolas@example.com';
        $user->setMailer($mockMailer);

        $this->assertTrue($user->notify('Hello'));
    }

    /**
     * Test function with advanced mock object creation (overriding of methods from class passed in mockBuilder method).
     */
    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new user();
        $mockMailer = $this->getMockBuilder(Mailer::class)
            ->setMethods(null)
            ->getMock()
        ;

        $user->setMailer($mockMailer);

        $this->expectException(MailerException::class);

        $user->notify("Hello");
    }
}
