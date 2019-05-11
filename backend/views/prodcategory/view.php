<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodcategory */

$this->title = $model->pcategoryname;
$this->params['breadcrumbs'][] = ['label' => 'Prodcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prodcategory-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idcategory], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idcategory], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcategory',
            'pcategoryname',
            'pcategorydescription',
            'parentid',
            'keywords',
        ],
    ]) ?>

</div>
