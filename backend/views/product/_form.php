<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php $category = \backend\models\Prodcategory::find()->all();
    $items = \yii\helpers\ArrayHelper::map($category, 'idcategory', 'pcategoryname');
    $params = ['promt' => 'Выберите категорию'];
    ?>
    <?= $form->field($model, 'prodcategory_idcategory')->dropDownList($items, $params) ?>


    <?= $form->field($model, 'productname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prodcontent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proddecription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hit')->dropDownList(['0', '1',], ['prompt' => '']) ?>

    <?= $form->field($model, 'new')->dropDownList(['0', '1',], ['prompt' => '']) ?>

    <?= $form->field($model, 'sale')->dropDownList(['0', '1',], ['prompt' => '']) ?>

    <?= $form->field($model, 'image')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
