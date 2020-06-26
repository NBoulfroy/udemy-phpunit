<?php
/**
 * User class.
 *
 * @Project : phpunit
 * @File    : User.php
 * @Author  : BOULFROY Nicolas
 * @Create  : 2020/05/22
 * @Update  : 2020/06/12
 */

class User
{
    /** @var string $firstName */
    public $firstName;

    /** @var string $lastName */
    public $lastName;

    /** @var string $email */
    public $email;

    /** @var Mailer $mailer */
    protected $mailer;

    /**
     * Get the user's full name form thier first name and surname.
     *
     * @return string The user's full name
     */
    public function getFullName(): string
    {
        return trim(ucfirst($this->firstName).' '.strtoupper($this->lastName));
    }

    /**
     * @var string $message The message
     *
     * @return bool True if sent, false otherwise
     */
    public function notify(string $message): bool
    {
        return $this->mailer->sendMessage($this->email, $message);
    }

    /**
     * Set mailer dependecy.
     *
     * @param Mailer $mailer
     */
    public function setMailer(Mailer $mailer): void
    {
        $this->mailer = $mailer;
    }
}
