<?php
/**
 * Created by PhpStorm.
 * File: UserRepository.php
 * Date: 2019-05-11
 * Time: 18:19
 */

namespace backend\repositories;

use common\models\User;

class UserRepository
{
    public function save(User $user): void
    {
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }
    }
}