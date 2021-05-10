<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RegionCoursesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-courses-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'slug') ?>

    <?php // echo $form->field($model, 'lang_hash') ?>

    <?php // echo $form->field($model, 'lang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
