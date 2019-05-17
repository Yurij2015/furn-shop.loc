<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->params['siteName'];

use yii\grid\GridView;
use yii\web\View;
use yii\helpers\Html;

?>

<div class="site-index">

    <div class="jumbotron">
        <h1>Интернет-салон мебели!</h1>
        <p class="lead">Качественная и надежная мебель от лучшей компании</p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-3">
                <h4>Категории</h4>
                <hr>
                <?= \common\components\MenuWidget::widget(['tpl' => 'menu']); ?>
            </div>

            <div class="col-lg-9">
                <hr>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        //'idproduct',
//                        [
//                            'attribute' => 'prodcategory_idcategory',
//                            'value' => 'prodcategory.pcategoryname',
//                        ],

                        //'prodcategory_idcategory',
                        'productname',
                        //'prodcontent:ntext',
                        'price',
                        [
                            'attribute' => 'image',
                            'format' => 'html',
                            'value' => function ($product) {
                                return Html::img($product->getImage()->getUrl(), ['alt' => $product->productname, 'width' => '100']);
                            },
                        ],
                        //'keywords',
                        //'proddecription',
                        //'img',
                        //'hit',
                        //'new',
                        //'sale',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
</div>
