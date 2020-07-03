<?php
/**
 * Mailer class.
 *
 * @Project : udemy-phpunit
 * @File    : Mailer.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/26
 * @Update  : 2020/07/03
 */

namespace Basic;

use Basic\Exception\MailerException;

class Mailer
{
    /**
     * @param string $email   The email address
     * @param string $message The message
     *
     * @return bool
     *
     * @throws MailerException
     */
    public function sendMessage(string $email = null, string $message = null): bool
    {
        if (null !== $email) {
            sleep(3);

            echo ' send '.$message.' to '.$email;

            return true;
        }

        throw new MailerException();
    }
}
