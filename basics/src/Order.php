<?php
/**
 * Order class.
 *
 * @Project : udemy-phpunit
 * @File    : Order.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/30
 * @Update  : 2020/07/03
 */

class Order
{
    /**
     * Quantity.
     *
     * @var int $quantity
     */
    public $quantity;

    /**
     * Unit price.
     *
     * @var float $unitPrice
     */
    public $unitPrice;

    /**
     * Amount.
     *
     * @var int $amount
     */
    public $amount;

    /**
     * Payment gateway dependency.
     *
     * @var PaymentGateway $gateway
     */
    protected $gateway;

    /**
     * Order constructor.
     *
     * @param int   $quantity Quantity
     * @param float $unitPrice Unit price
     *
     * @return void
     */
    public function __construct(int $quantity, float $unitPrice)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->amount = $quantity * $unitPrice;
    }

    /**
     * Process the order.
     *
     * @return bool|null
     */
    public function process(PaymentGateway $gateway): ?bool
    {
        return $gateway->charge($this->amount);
    }
}
