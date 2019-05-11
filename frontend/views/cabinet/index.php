<?php
/**
 * Created by PhpStorm.
 * File: index.php
 * Date: 2019-05-11
 * Time: 19:57
 */

use yii\helpers\Html;

$this->title = 'User cabinet';
$this->params['broadcumps'][] = $this->title;
?>

<div class="cabinet-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Кабинет пользователя: <?= Yii::$app->user->identity->username; ?></p>

</div>
