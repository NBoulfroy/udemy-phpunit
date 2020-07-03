<?php
/**
 * Function library.
 *
 * @Project : phpunit
 * @File    : Functions.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Create  : 2020/07/03
 */

namespace Basic;

class Functions
{
    /**
     * @param int $a First number
     * @param int $b Second number
     *
     * @return int
     */
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }
}
