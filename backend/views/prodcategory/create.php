<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodcategory */

$this->title = 'Create Prodcategory';
$this->params['breadcrumbs'][] = ['label' => 'Prodcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prodcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
