<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\menu\models\MenuItems */

$this->title = 'Update Menu Items: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Menu Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->menu_item_id]];
$this->params['breadcrumbs'][] = 'Update';

echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/menu/menu/create/']);
?>
<div class="menu-items-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
