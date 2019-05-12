<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NewscategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Newscategories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newscategory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Newscategory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idnewscategory',
            'ncatname',
            'ncdescription',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
