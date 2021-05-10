<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pages */

$this->title = 'Update Pages: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php  echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/pages/create']); ?>

<div class="pages-update">
   <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
