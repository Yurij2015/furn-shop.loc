<?php
/**
 * Created by PhpStorm.
 * File: SignupTest.php
 * Date: 2019-05-10
 * Time: 13:13
 */
namespace commot\tests\unit\models\User;

use Codeception\Test\Unit;
use common\models\User;

class SignupTest extends Unit
{
    public function testSuccess()
    {
        $user = User::signup(
            $username = 'username',
            $email = 'email@site.com',
            $password = 'password'
        );

        $this->assertEquals($username, $user->username);
        $this->assertEquals($email, $user->email);
        $this->assertNotEmpty($user->password_hash);
        $this->assertNotEquals($password, $user->password_hash);
        $this->assertNotEmpty($user->created_at);
        $this->assertNotEmpty($user->auth_key);
        $this->assertFalse($user->isActive());
    }
}