<?php
/**
 * User class.
 *
 * @Project : phpunit
 * @File    : User.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 */

class User
{
    /** @var string $firstName */
    public $firstName;

    /** @var string $lastName */
    public $lastName;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return strtoupper($this->lastName).' '.ucfirst($this->firstName);
    }
}