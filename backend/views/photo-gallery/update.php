<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PhotoGallery */

$this->title = 'Update Photo Gallery: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Photo Galleries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php  echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/photo-gallery/create']); ?>
<div class="photo-gallery-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
