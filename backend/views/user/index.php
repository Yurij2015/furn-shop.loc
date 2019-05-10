<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'username',
//            'auth_key',
            'email:email',
            [
                'attribute' => 'status',
                'filter' => \backend\helpers\UserHelper::statusList(),
                'value' => function (\common\models\User $user) {
                    return \backend\helpers\UserHelper::statusLabel($user->status);
                },
                'format' => 'raw',
            ],
            'created_at:datetime',
//            'updated_at:datetime',
            //'verification_token',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
