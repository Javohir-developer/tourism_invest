<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = 'Update Person: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="person-update">
	<?php  echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/person/create']); ?>
 <?= $this->render('_form', [
        'model' => $model,
		'region' => $region,
    ]) ?>

</div>
