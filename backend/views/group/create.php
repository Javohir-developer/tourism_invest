<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Group */

$this->title = 'Create Governance';
$this->params['breadcrumbs'][] = ['label' => 'Governances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="governance-create">
    <?= $this->render('_form', [
        'model' => $model,
		'persons' => $persons,
    ]) ?>

</div>
