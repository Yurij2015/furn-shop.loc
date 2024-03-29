<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->params['siteName'];

use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Menu;

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
                <?= GridView::widget([
                    'dataProvider' => $provider,
                    //'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        //'idproduct',

                        [
                            'attribute' => 'prodcategory_idcategory',
                            'value' => 'prodcategory.pcategoryname',
                        ],

                        //'prodcategory_idcategory',
                        'productname',
                        'prodcontent:ntext',
                        'price',
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
            <?php if (!empty($products)) : ?>

                <?php foreach ($products as $product) : ?>
                    <div class="col-lg-3">

                        <h4><?= $product->productname ?></h4>
                        <hr>

                        <?php
                        //$mainImg = $product->getImage();
                        ?>
                        <?= Html::img($product->getImage()->getUrl(), ['alt' => $product->productname]) ?>

                        <h4>Price: <?= $product->price ?></h4>
                        <p>Title: <?= $product->productname ?></p>
                        <p>Keywords: <?= $product->keywords ?></p>
                        <p>Description: <?= $product->proddecription ?></p>
                        <p>Detail: <?= $product->prodcontent ?></p>
                        <p>Category: <?= $product->prodcategory->pcategoryname ?></p>
                        <?php if ($product->new): ?>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>


            <?php else: ?>
            <h4>Здесь пусто</h4>
            <hr>
            <p>Товаров еще нет</p>
        </div>

        <?php endif; ?>
    </div>
</div>
</div>
