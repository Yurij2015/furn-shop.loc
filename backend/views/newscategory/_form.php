<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Newscategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="newscategory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ncatname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ncdescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
