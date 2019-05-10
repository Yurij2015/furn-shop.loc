<?php
/**
 * Created by PhpStorm.
 * File: ContactService.php
 * Date: 2019-05-10
 * Time: 19:04
 */

namespace frontend\services\contact;


use frontend\forms\ContactForm;
use yii\mail\MailerInterface;

class ContactService
{
    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
//    private $supportEmail;
    private $adminEmail;
    private $mailer;

    public function __construct($adminEmail, MailerInterface $mailer)
    {
//        $this->supportEmail = $supportEmail;
        $this->adminEmail = $adminEmail;
        $this->mailer = $mailer;
    }

    public function send(ContactForm $form): void
    {
        $sent = $this->mailer->compose()
//            ->setFrom($this->supportEmail)
            ->setReplyTo($this->adminEmail)
            ->setSubject($form->subject)
            ->setTextBody($form->body)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Sending error.');
        }
    }
}