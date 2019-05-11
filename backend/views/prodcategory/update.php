<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodcategory */

$this->title = 'Update Prodcategory: ' . $model->idcategory;
$this->params['breadcrumbs'][] = ['label' => 'Prodcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcategory, 'url' => ['view', 'id' => $model->idcategory]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prodcategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
