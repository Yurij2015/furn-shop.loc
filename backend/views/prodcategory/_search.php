<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdcategorySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodcategory-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcategory') ?>

    <?= $form->field($model, 'pcategoryname') ?>

    <?= $form->field($model, 'pcategorydescription') ?>

    <?= $form->field($model, 'parentid') ?>

    <?= $form->field($model, 'keywords') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
