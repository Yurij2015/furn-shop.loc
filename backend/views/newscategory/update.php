<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Newscategory */

$this->title = 'Update Newscategory: ' . $model->idnewscategory;
$this->params['breadcrumbs'][] = ['label' => 'Newscategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idnewscategory, 'url' => ['view', 'id' => $model->idnewscategory]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="newscategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
