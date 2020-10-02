<?php
/**
 *
 *
 * @Project : udemy-phpunit
 * @File    : UserTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/09/30
 * @Update  :
 */

/**
 * MailerTest class.
 *
 * @Project : udemy-phpunit
 * @File    : MailerTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 * @Update  : 2020/10/02
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Mailer;
use Tdd\User;
use \InvalidArgumentException;

class UserTest extends TestCase
{
    /**
     * Tests a method which uses an object other object (dependency injection).
     */
    public function testNotifyReturnsTrue()
    {
        $mailer = $this->createMock(Mailer::class);
        $mailer->method('send_2')
            ->willReturn(true)
        ;

        $user = new User('toto@gmail.com');
        $user->setMailer($mailer);

        $this->assertTrue($user->notify('Hello!'));
    }
}
