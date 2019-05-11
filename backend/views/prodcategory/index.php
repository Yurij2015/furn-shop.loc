<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProdcategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prodcategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodcategory-index">

    <p>
        <?= Html::a('Create Prodcategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'idcategory',
            'pcategoryname',
            'pcategorydescription',
            'parentid',
            'keywords',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
