<?php
/**
 * Product class.
 *
 * @Project : udemy-phpunit
 * @File    : Item.php
 * @Author  : Hollingworth Dave
 * @Create  : ?
 * @Update  : 2020/07/24
 */

namespace Tdd;

/**
 * Product
 *
 * An example product class
 */
class Product
{
    /**
     * Unique identifier
     * 
     * @var integer
     */
    protected $productId;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        $this->productId = rand();
    }
}
