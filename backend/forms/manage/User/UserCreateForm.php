<?php
/**
 * Created by PhpStorm.
 * File: UserCreateForm.php
 * Date: 2019-05-11
 * Time: 18:09
 */

namespace backend\forms\manage\User;

use common\models\User;
use yii\base\Model;

class UserCreateForm extends Model
{
    public $username;
    public $email;
    public $password;

    public function rules(): array
    {
        return [
            [['username', 'email'], 'required'],
            [['email', 'email']],
            [['username', 'email'], 'string', 'max' => 255],
            [['username', 'email'], 'unique', 'targetClass' => User::class],
            ['password', 'string', 'min' => 6],
        ];

    }
}