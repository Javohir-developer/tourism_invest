<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RegionCourses */

$this->title = 'Update Region Courses: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Region Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?php  echo LangsWidgets::widget(['model_db' => $model,'create_url' => '/post/create']); ?>
<div class="region-courses-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
