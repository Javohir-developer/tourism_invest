<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Invest */

$this->title = 'Добавить инвест';
$this->params['breadcrumbs'][] = ['label' => 'Invests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="invest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
