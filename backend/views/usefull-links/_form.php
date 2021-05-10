<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\UsefullLinks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-7">
    <?php $form = ActiveForm::begin(); ?>
    <div class="post-form">
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div><!-- row -->
</div>
    </div>

    <div class="col-lg-5">
        <div class="panel">

            <div class="panel-heading">
                <span class="panel-title"><?=__('Files')?></span>
            </div>
            <div class="panel-body">
                <?php
                echo \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                    'attribute' => 'UsefullLinks[image]',
                    'id' => 'files_id_usefull',
                    'values' => $model->image,
                    'value_encode' => true
                ]);
                ?>
            </div>

            <div class="panel-heading">
                <span class="panel-title"><?=__('Settings')?></span>
            </div>

            <div class="panel-body">
                <?= $form->field($model, 'type')->dropDownList([
                    1 => __("Usefull_links"),
                    0 => __("Partners"),
                ], ['class' => 'full-width', 'data-init-plugin' => 'select2'])->label(false); ?>
            </div>

            <div class="panel-body">
                <?php
                if (is_null($model->status)) {
                    $model->status = true;
                }
                // Usage with ActiveForm and model
                echo $form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery']);
                ?>
            </div>
            <div class="panel-body">
                <?= $form->field($model, 'order')->textInput() ?>
            </div>
        </div>
    </div>
    <div style="display: none;"><?=\oks\categories\widgets\CategoriesWidget::widget();?></div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
