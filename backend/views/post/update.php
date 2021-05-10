<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = 'Update Post: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php  echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/post/create']); ?>
<div class="post-update">
  <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
