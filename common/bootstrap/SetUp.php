<?php
/**
 * Created by PhpStorm.
 * File: SetUp.php
 * Date: 2019-05-10
 * Time: 01:48
 */

namespace common\bootstrap;

use frontend\services\auth\PasswordResetService;
use yii\base\BootstrapInterface;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

        $container->setSingleton(PasswordResetService::class, [], [
            [$app->params['supportEmail'] => $app->name . ' robot'],
        ]);
//        $container->setSingleton(PasswordResetService::class, function () use ($app) {
//            return new PasswordResetService([$app->params['supportEmail'] => $app->name . ' robot']);
//        });
    }
}