<?php
/**
 * ItemChild class.
 *
 * @Project : udemy-phpunit
 * @File    : ItemChild.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/07/24
 */

namespace Tdd;

class ItemChild extends Item
{
    /**
     * @return int
     */
    public function getID()
    {
        return parent::getID();
    }
}
