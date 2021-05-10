<?php


/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\bootstrap\Html;

/* @var $model common\modules\menu\models\Menu */
/* @var $form yii\widgets\ActiveForm */

\common\modules\menu\assets\MenuAssets::register($this);
$addon = <<< HTML
<span class="input-group-addon">
    <i class="glyphicon glyphicon-calendar"></i>
</span>
HTML;
?>
<div class="col-md-4">

    <?php if(!$model->isNewRecord):?>
        <div class="panel panel-default">
            <div class="panel-heading"><?=__('Item')?></div>
            <div class="panel-body">
                <div class="menu-items-form">

                    <?php

                    $form = ActiveForm::begin(['id' => 'menu-form-item','options' => ['data-pjax' => true]]); ?>

                        <?php
                        try {
                        echo $form->field($menuItem, 'title')->textInput(['maxlength' => true]);
                        echo $form->field($menuItem, 'url')->textInput(['maxlength' => true]);
                        echo $form->field($menuItem, 'icon')->textInput(['maxlength' => true]);
                        } catch (\Exception $e) {
                            var_dump($e);return;
                        }

                        ?>

                    <div class="form-group">
                        <?= Html::submitButton(__('Save'), ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>

            </div>

        </div>
    <?php endif;?>
    <div class="panel panel-default">
        <div class="panel-heading"><?=__('Menu')?></div>
        <div class="panel-body">
            <div class="menu-form">
                <?php $form = ActiveForm::begin(['id' => 'menu-form','options' => ['data-pjax' => true]]); ?>
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
                <?= $form->field($model, 'type')->dropDownList($model::find()->types()) ?>
                <div class="form-group">
                    <?= Html::submitButton(__('Save'), ['class' => 'btn btn-success']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading"><?=__('All items')?></div>
        <div class="panel-body">
    <?php
        if(!$model->isNewRecord):
            $menu = new \common\modules\menu\components\MenuAdmin(['alias' => $model->alias]);
        endif;
    ?>
        </div>
    </div>
</div>
