<?php
/**
 * Created by PhpStorm.
 * File: CategoryController.phpDate: 2019-05-12
 * Time: 06:48
 */

namespace frontend\controllers;

use backend\models\Prodcategory;
use backend\models\Product;
use Yii;
use yii\web\Controller;

class ShopcategoryController extends Controller
{

    public function actionIndex()
    {
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        return $this->render('index', compact('hits'));
    }

    public function actionView($idcategory)
    {
        $idcategory = Yii::$app->request->get('idcategory');
        $products = Product::find()->where(['prodcategory_idcategory' => $idcategory])->all();
        return $this->render('view', compact('products'));
    }

}