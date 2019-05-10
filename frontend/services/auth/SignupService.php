<?php
/**
 * Created by PhpStorm.
 * File: SignupService.php
 * Date: 2019-05-10
 * Time: 14:59
 */

namespace frontend\services\auth;

use common\models\User;
use frontend\forms\SignupForm;

class SignupService
{
    public function signup(SignupForm $form): User
    {
        if (User::find()->andWhere(['username' => $form->username])) {
            throw new \DomainException('This username has already been taken');
        }

        if (User::find()->andWhere(['email' => $form->email])) {
            throw new \DomainException('This email address has already been taken');
        }

        $user = User::signup(
            $form->username,
            $form->email,
            $form->password
        );
        if (!$user->save()) {
            throw new \RuntimeException('Saving error');
        }
        return $user;
    }
}