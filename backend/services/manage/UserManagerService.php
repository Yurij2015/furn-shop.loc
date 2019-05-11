<?php
/**
 * Created by PhpStorm.
 * File: UserManagerService.php
 * Date: 2019-05-11
 * Time: 17:54
 */

namespace backend\services\manage;

use common\models\User;
use backend\forms\manage\User\UserCreateForm;
use backend\repositories\UserRepository;


class UserManagerService
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(UserCreateForm $form): User
    {
        $user = User::create(
            $form->username,
            $form->email,
            $form->password
        );
        $this->repository->save($user);
        return $user;
    }
}