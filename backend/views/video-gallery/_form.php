<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\VideoGallery */
/* @var $form yii\widgets\ActiveForm */

\wbraganca\fancytree\FancytreeAsset::register($this);
?>

<div class="video-gallery-form">
    <?php $form = ActiveForm::begin()?>
    <div class="panel form-horizontal col-md-8">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group no-margin-hr">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'title-generate form-control']) ?>

                    </div>
                </div><!-- col-sm-6 -->
                <div class="col-sm-12">
                    <div class="form-group no-margin-hr">
                        <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'class' => 'slug-generate data-generate form-control']) ?>
                    </div>
                </div><!-- col-sm-6 -->

                <div class="col-sm-12">
                    <div class="form-group no-margin-hr">
                        <?= $form->field($model, 'description')->textarea(['row' => 3]) ?>
                    </div>
                </div><!-- col-sm-6 -->
            </div><!-- row -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"><?=__('Image')?></span>
                </div>
                <div class="panel-body">
                    <?php
                    echo \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                        'attribute' => 'VideoGallery[image]',
                        'id' => 'files_id_image',
                        'values' => $model->image,
                        'value_encode' => true
                    ]);
                    ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"><?=__('Video')?></span>
                </div>
                <div class="panel-body">
                    <?php
                    echo \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                        'attribute' => 'VideoGallery[video]',
                        'id' => 'files_id_video',
                        'values' => $model->video,
                        'value_encode' => true
                    ]);
                    ?>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title"><?=__('Settings')?></span>
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

                <?= $form->field($model, 'type')->dropDownList(['0' => __('Portal'), '1' => __('Center')])?>
                    
                <div class="panel-body">
                    <?= $form->field($model, 'sort')->textInput() ?>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>