<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RegionCourses */

$this->title = 'Create Region Courses';
$this->params['breadcrumbs'][] = ['label' => 'Region Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

