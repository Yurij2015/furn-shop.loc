<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Odrer */

$this->title = 'Create Odrer';
$this->params['breadcrumbs'][] = ['label' => 'Odrers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="odrer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
