<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Create Restr';
$this->params['breadcrumbs'][] = ['label' => 'Restr', 'url' => ['restr']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">
    <?= $this->render('_resrtform', [
        'model' => $model,
		'region' => $region,
		'city' => $city,
    ]) ?>

</div>
