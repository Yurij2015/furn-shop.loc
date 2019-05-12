<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Newscategory */

$this->title = 'Create Newscategory';
$this->params['breadcrumbs'][] = ['label' => 'Newscategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newscategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
