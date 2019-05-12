<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OdrerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Odrers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odrer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Odrer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idodrer',
            'created_at',
            'updated_at',
            'user_id',
            'product_idproduct',
            //'customer',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
