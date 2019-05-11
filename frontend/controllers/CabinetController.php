<?php
/**
 * Created by PhpStorm.
 * File: CabinetController.php
 * Date: 2019-05-11
 * Time: 19:53
 */

namespace frontend\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class CabinetController extends Controller
{
    public function behaviors(): array
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }
}