<?php
/**
 * MailerTest class.
 *
 * @Project : udemy-phpunit
 * @File    : MailerTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 * @Update  : 2020/09/30
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\Mailer;
use \InvalidArgumentException;

class MailerTest extends TestCase
{
    /**
     * Tests a static method.
     */
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(Mailer::send('toto@gmail.com', 'Hello!'));
    }

    /**
     * Provokes an invalidArgumentException with a static method.
     */
    public function testInvalidArgumentExceptionIfEmailIsEmpty()
    {
        $this->expectException(InvalidArgumentException::class);

        Mailer::send('', '');
    }
}
