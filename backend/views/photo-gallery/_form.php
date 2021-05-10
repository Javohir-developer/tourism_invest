<?php

use kartik\switchinput\SwitchInput;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\PhotoGallery */
/* @var $form yii\widgets\ActiveForm */

\wbraganca\fancytree\FancytreeAsset::register($this);

?>
<div class="photo-gallery-form">
    <?php $form = ActiveForm::begin()?>
             <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class' => 'title-generate form-control']) ?>
                    </div>
                     

                    <div class="form-group">
                        <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'class' => 'slug-generate data-generate form-control']) ?>
                    </div>


                    <div class="form-group">
                        <?= $form->field($model, 'description')->textarea(['row' => 3]) ?>
                    </div>
               </div>

                <div class="col-lg-5">
                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title"><?=__('Image')?></span>
                        </div>
                        <div class="panel-body">
                            <?php
                            echo \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                                'attribute' => 'PhotoGallery[image]',
                                'id' => 'files_id_photo_gallery',
                                'values' => $model->image,
                                'value_encode' => true
                            ]);
                            ?>
                        </div>
                    </div>
                    <div class="panel">
                        <?php
                        if (is_null($model->status)) {
                            $model->status = true;
                        }
                        // Usage with ActiveForm and model
                        echo $form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery']);
                        ?>
                    </div>

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
