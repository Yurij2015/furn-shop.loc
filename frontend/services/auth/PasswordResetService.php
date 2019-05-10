<?php
/**
 * Created by PhpStorm.
 * File: PasswordResetService.php
 * Date: 2019-05-10
 * Time: 15:42
 */

namespace frontend\services\auth;

use common\models\User;
use frontend\forms\PasswordResetRequestForm;
use frontend\forms\ResetPasswordForm;
use Yii;

class PasswordResetService
{
    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return bool whether the email was send
     */
    public function request(PasswordResetRequestForm $form): void
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $form->email,
        ]);

        if (!$user) {
            throw new \RuntimeException('User is not found.');
        }

        $user->requestPasswordReset();

        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }


        $sent = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($form->email)
            ->setSubject('Password reset for ' . Yii::$app->name)
            ->send();
        if (!$sent) {
            throw new \RuntimeException('Sanding error.');
        }
    }

    public function validateToken($token): void
    {
        if (empty($token) || !is_string($token)) {
            throw new \DomainException('Pass.');
        }

        if (!$this->_user) {
            throw new \DomainException('Wrong password reset token.');
        }
    }

    public function reset(string $token, ResetPasswordForm $form): void
    {
        $user = User::findByPasswordResetToken($token);

        if (!$user) {
            throw new \DomainException('User in not found.');
        }

        $user->resetPassword($form->password);


        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }


}