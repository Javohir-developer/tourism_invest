<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Update User: ' . $model->id;
$ind = $model->restr ? "restr" : "index";
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => [$ind]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">
<?= $this->render('_resrtform', [
        'model' => $model,
	]) ?>

</div>
