<?php
/**
 * Created by PhpStorm.
 * File: menu.php
 * Date: 2019-05-12
 * Time: 02:34
 */
?>
<div class="list-group">
    <a href="<?= \yii\helpers\Url::to(['/shopcategory/view', 'idcategory' => $category['idcategory']]) ?>"
       class="list-group-item"><?= $category['pcategoryname'] ?></a>
    <?php if (isset($category['childs'])): ?>
        <ul class="list-group">
            <li class="list-group-item"><?= $this->getMenuHtml($category['childs']) ?></li>
        </ul>
    <?php endif; ?>
</div>
