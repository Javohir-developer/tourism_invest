<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mistakes */

$this->title = 'Create Mistakes';
$this->params['breadcrumbs'][] = ['label' => 'Mistakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mistakes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
