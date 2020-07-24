<?php
/**
 * AbstractPersonTest class.
 *
 * @Project : udemy-phpunit
 * @File    : AbstractPersonTest.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 */

namespace Tdd\Tests;

use PHPUnit\Framework\TestCase;
use Tdd\AbstractPerson;
use Tdd\Doctor;

class AbstractPersonTest extends TestCase
{
    /**
     * Test with inheritance class.
     */
    public function testNameAndTitleIsReturned()
    {
        $doctor = new Doctor('Green');

        $this->assertEquals('Dr. Green', $doctor->getNameAndTitle());
    }

    /**
     * Test with Mock object.
     */
    public function testNameAndTitleIncludesValueFromGetTitle()
    {
        $mock = $this->getMockBuilder(AbstractPerson::class)
            ->setConstructorArgs(['Green'])
            ->getMockForAbstractClass();

        $mock->method('getTitle')
            ->willReturn('Dr.');

        $this->assertEquals('Dr. Green', $mock->getNameAndTitle());
    }
}
