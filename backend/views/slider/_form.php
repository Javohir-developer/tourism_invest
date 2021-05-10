<?php

use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\Slider */
/* @var $form yii\widgets\ActiveForm */
\wbraganca\fancytree\FancytreeAsset::register($this);
?>
<div class="slider-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'link')->textInput(['maxlength' => true,'class' => 'form-control slug-generate']) ?>
            </div>


        </div>
        <div class="col-sm-5">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"><?=__('Image')?></span>
                </div>
                <div class="panel-body">
                    <?php
                    echo \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                        'attribute' => 'Slider[image]',
                        'id' => 'files_id_asdsdasdsad',
                        'values' => $model->image,
                        'value_encode' => true
                    ]);
                    ?>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <?= $form->field($model, 'order')->textInput() ?>
                    </div>
                    <div class="form-group">
                        <?= $form->field($model, 'type')->dropDownList(['Slider', 'Banner', 'Banner_Footer']) ?>
                    </div>
                    <div class="form-group">
                        <?=$form->field($model, 'type_to')->dropDownList(['0' => 'Портал', '1' => 'Центр'])?>
                    </div>

                    <div class="form-group">
                        <?php if (is_null($model->status)) {$model->status = true;} ?>
                        <?=$form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery'])
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
