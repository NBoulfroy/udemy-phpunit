<?php
/**
 * User class.
 *
 * @Project : phpunit
 * @File    : User.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Update  : 2020/06/12
 */

namespace Src;

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
        return trim(ucfirst($this->firstName).' '.strtoupper($this->lastName));
    }
}
