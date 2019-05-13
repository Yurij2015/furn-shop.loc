<?php
/**
 * Created by PhpStorm.
 * File: CategoryController.phpDate: 2019-05-12
 * Time: 06:48
 */

namespace frontend\controllers;

use backend\models\Prodcategory;
use backend\models\ProdcategorySearch;
use backend\models\Product;
use backend\models\ProductSearch;
use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

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


        $query = ProductSearch::find()->where(['prodcategory_idcategory' => $idcategory]);
        $provider = new ActiveDataProvider([
            'query' => $query
        ]);

        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('view', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'products' => $products,
            'provider' => $provider

        ]);

//        $idcategory = Yii::$app->request->get('idcategory');
//        $products = Product::find()->where(['prodcategory_idcategory' => $idcategory])->all();
//        return $this->render('view', compact('products'));
    }

}