<?php

use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\Pages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-7">
    <div class="post-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'title-generate form-control']) ?>

            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'slug')->textInput(['maxlength' => true,'class' => 'form-control slug-generate']) ?>

            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'anons')->textarea(['maxlength' => true]) ?>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?php  echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
                <?= $form->field($model, 'body')->widget(CKEditor::className(), [
                    'options' => ['rows' => 6],
                    'clientOptions' => [
                        'allowedContent' => true,
                        'extraPlugins' => 'filemanager-oks,justify,font,print',
                        'height' => 150,
                        'toolbarGroups' => [
                            [
                                'name' => 'filemanager-qwerty'
                            ],
                            ['name' => 'document', 'groups' => ['mode', 'document', 'doctools']],
                            ['name' => 'clipboard', 'groups' => ['clipboard', 'undo']],
                            ['name' => 'editing', 'groups' => ['find', 'selection', 'spellchecker']],
                            ['name' => 'basicstyles', 'groups' => ['basicstyles', 'colors', 'cleanup']],
                            '/',
                            ['name' => 'paragraph', 'groups' => ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']],
                            ['name' => 'links', 'groups' => ['links']],
                            ['name' => 'insert', 'groups' => ['insert']],
                            '/',
                            ['name' => 'styles', 'groups' => ['styles']],
                            ['name' => 'colors', 'groups' => ['colors']],
                            ['name' => 'tools', 'groups' => ['tools']],
                            ['name' => 'others', 'groups' => ['others']],
                        ],
                        'removeButtons' => ''
                    ],
                    'preset' => 'custom',
                ]) ?>

            </div>
        </div><!-- col-sm-6 -->
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
                        'attribute' => 'Pages[files]',
                        'id' => 'files_id_page',
                        'values' => $model->files,
                        'value_encode' => true
                    ]);
                    ?>
                </div>
                <div class="panel-heading">
                    <?php
                    echo DatePicker::widget([
                        'name' => 'Pages[published_on]',
                        'value' => $model->published_on,
                        'options' => ['placeholder' => 'Select issue date ...'],
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ]
                    ]);
                    ?>
                </div>

                <div class="panel-heading">
                    <span class="panel-title"><?=__('Settings')?></span>
                </div>
                <div class="panel-body">
                    <?php
                    echo \oks\categories\widgets\CategoriesWidget::widget([
                        'selected' => $model->categoriesSelected(),
                        'type' => '300',
                        'model_db' => $model,
                        'name' => 'Pages[category_id]'
                    ]);
                    ?>
                </div>
                <div class="panel-body">
                    <?php if (is_null($model->status)) {$model->status = true;} ?>
                    <?=$form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery'])?>
                </div>
                <div class="panel-body">
                    <?=$form->field($model, 'type')->dropDownList(['0' => 'Портал', '1' => 'Центр'])?>
                </div>
            </div>
        </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

