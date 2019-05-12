<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Odrer */

$this->title = 'Update Odrer: ' . $model->idodrer;
$this->params['breadcrumbs'][] = ['label' => 'Odrers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idodrer, 'url' => ['view', 'id' => $model->idodrer]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="odrer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
