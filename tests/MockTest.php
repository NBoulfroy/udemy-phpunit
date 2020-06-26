<?php
/**
 * MockTest class.
 *
 * @Project : udemy-phpunit
 * @File    : MockTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/26
 */

namespace Tests;

use PHPUnit\Framework\TestCase;
use Mailer;

require 'vendor/autoload.php';

class MockTest extends TestCase
{
    /**
     * Create mock is necessary when a class use dependencies who are problematic (database, e-mail, etc.).
     */
    public function testMock()
    {
        $mock = $this->createMock(Mailer::class);
        $mock->method('sendMessage')
            ->willReturn(true);

        $result = $mock->sendMessage('nicolas@example.com', 'Hello');

        $this->assertTrue($result);
    }
}
