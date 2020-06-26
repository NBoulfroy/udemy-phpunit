<?php
/**
 * Mailer class.
 *
 * @Project : udemy-phpunit
 * @File    : Mailer.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/06/26
 */

class Mailer
{
    /**
     * @param string $email   The email address
     * @param string $message The message
     *
     * @return bool
     */
    public function sendMessage(string $email, string $message): bool
    {
        sleep(3);

        echo 'send'.$message.' to '.$email;

        return true;
    }
}
