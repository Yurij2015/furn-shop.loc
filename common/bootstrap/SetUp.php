<?php
/**
 * Created by PhpStorm.
 * File: SetUp.php
 * Date: 2019-05-10
 * Time: 01:48
 */

namespace common\bootstrap;

//use frontend\services\auth\PasswordResetService;
use frontend\services\contact\ContactService;
use yii\base\BootstrapInterface;
use yii\mail\MailerInterface;


class SetUp implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $container = \Yii::$container;

//        $container->setSingleton(PasswordResetService::class);
        $container->setSingleton(MailerInterface::class, function () use ($app) {
            return $app->mailer;
        });

        $container->setSingleton(ContactService::class, [], [
            $app->params['adminEmail'],
//            Instance::of(MailerInterface::class)
        ]);
//        $container->setSingleton(PasswordResetService::class, function () use ($app) {
//            return new PasswordResetService([$app->params['supportEmail'] => $app->name . ' robot']);
//        });
    }
}