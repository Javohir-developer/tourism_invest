<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Group */

$this->title = 'Update Governance: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Governances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="governance-update">
  <?= $this->render('_form', [
        'model' => $model,
		'persons' => $persons,
	]) ?>

</div>
