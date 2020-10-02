<?php
/**
 * Mailer class.
 *
 * @Project : udemy-phpunit
 * @File    : Mailer.php
 * @Author  : Hollingworth Dave
 * @Create  : ?
 * @Update  : 2020/10/02
 */

namespace Tdd;

use \InvalidArgumentException;

/**
 * Mailer
 *
 * An example mailer class
 */
class Mailer
{
    /**
     * Send a message
     *
     * @param string $email Recipient email address
     * @param string $message Content of the message
     *
     * @return boolean
     *
     * @throws InvalidArgumentException If $email is empty
     */
    public static function send(string $email, string $message): bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        echo "Send '$message' to $email";

        return true;
    }

    /**
     * @param string $email Recipient email address
     * @param string $message Content of the message
     *
     * @return bool
     *
     * @throws InvalidArgumentException If $email is empty
     */
    public function send_2(string $email, string $message): bool
    {
        if (empty($email)) {
            throw new InvalidArgumentException;
        }

        echo "Send '$message' to $email";

        return true;
    }
}
