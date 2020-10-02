<?php
/**
 * User class.
 *
 * @Project : udemy-phpunit
 * @File    : User.php
 * @Author  : Hollingworth Dave
 * @Create  : ?
 * @Update  : 2020/10/02
 */

namespace Tdd;

use \InvalidArgumentException;

class User
{
    /**
     * Email address.
     *
     * @var string
     */
    private $email;

    /**
     * Mailer object.
     *
     * @var Mailer
     */
    private $mailer;

    /**
     * User constructor.
     *
     * @param string $email The user's email
     *
     * @return void
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * Mailer setter.
     *
     * @param Mailer $mailer A Mailer object
     *
     * @return void
     */
    public function setMailer(Mailer $mailer): void
    {
        $this->mailer = $mailer;        
    }

    /**
     * Returns user's email.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    
    /**
     * Send the user a message
     *
     * @param string $message The message
     *
     * @return boolean
     *
     * @throws InvalidArgumentException
     */
    public function notify(string $message)
    {
        return $this->mailer->send_2($this->email, $message);
    }
}
