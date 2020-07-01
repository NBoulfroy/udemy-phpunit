<?php
/**
 * Order class.
 *
 * @Project : udemy-phpunit
 * @File    : Order.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/30
 * @Update  : 2020/07/01
 */

class Order
{
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
     * @param PaymentGateway $gateway
     * @param int            $amount
     */
    public function __construct(PaymentGateway $gateway, $amount = 0)
    {
        $this->gateway = $gateway;
        $this->amount = $amount;
    }

    /**
     * Process the order.
     *
     * @return bool
     */
    public function process(): bool
    {
        return $this->gateway->charge($this->amount);
    }
}
