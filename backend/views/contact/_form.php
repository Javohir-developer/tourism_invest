<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">
    <?php $form = ActiveForm::begin(); ?>
	<div class="row">
	<div class="panel form-horizontal col-md-8">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group no-margin-hr">
    				<?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group no-margin-hr">

                        <?php  echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
                        <?= $form->field($model, 'message')->widget(CKEditor::className(), [
                            'options' => ['rows' => 6],
                            'clientOptions'=>[
                                'extraPlugins' => 'filemanager-oks',
                                'justifyClasses'=>[ 'AlignLeft', 'AlignCenter', 'AlignRight', 'AlignJustify' ],
                                'height'=>200,
                                'toolbarGroups' => [
                                    ['name' => 'filemanager-oks']
                                ],
                            ],
                            'preset' => 'full'
                        ]) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel form-horizontal col-md-4">
		<div class="panel-body">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group no-margin-hr">
						<?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group no-margin-hr">
						<?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="form-group no-margin-hr">
						<?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
					</div>
				</div>
				<div class="col-sm-12">
                    <div class="panel-body">
                        <?php if (is_null($model->status)) {$model->status = true;} ?>
                        <?=$form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery'])?>
                    </div>
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
