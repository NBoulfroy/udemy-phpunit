<?php
/**
 * QueueException class.
 *
 * @Project : udemy-phpunit
 * @File    : QueueException.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/19
 */

namespace Exception;

use \Exception;

class QueueException extends Exception
{
    /**
     * QueueException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct(string $message = 'Queue is full', int $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
