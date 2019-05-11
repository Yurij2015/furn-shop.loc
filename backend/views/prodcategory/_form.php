<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Prodcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prodcategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pcategoryname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pcategorydescription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parentid')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
