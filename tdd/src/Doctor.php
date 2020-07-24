<?php
/**
 * Doctor class.
 *
 * @Project : udemy-phpunit
 * @File    : Doctor.php
 * @Author  : Hollingworth Dave
 * @Create  : ?
 * @Update  : 2020/07/24
 */

namespace Tdd;

class Doctor extends AbstractPerson
{
    protected function getTitle()
    {
        return 'Dr.';
    }
}
