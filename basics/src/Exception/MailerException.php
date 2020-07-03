<?php
/**
 * MailerException class.
 *
 * @Project : udemy-phpunit
 * @File    : MailerException.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/26
 * @Update  : 2020/07/03
 */

namespace Basic\Exception;

use \Exception;

class MailerException extends Exception
{
    /**
     * MailerException constructor.
     *
     * @param string         $message
     * @param int            $code
     * @param Exception|null $previous
     */
    public function __construct(string $message = 'No email inform', int $code = 500, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
