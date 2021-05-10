<?php

use kartik\switchinput\SwitchInputAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\Faq */
/* @var $form yii\widgets\ActiveForm */

SwitchInputAsset::register($this);

?>
<?php $form = ActiveForm::begin(); ?>

<div class="col-md-6">
    <div class="col-sm-12">
        <div class="form-group">
            <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
            <?= $form->field($model, 'question')->widget(CKEditor::className(), [
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
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <?php if (is_null($model->status)) {$model->status = true;} ?>
            <?=$form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery'])?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

</div><!-- row -->

<div class="col-lg-6">
    <div class="form-group">
        <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
        <?= $form->field($model, 'answer')->widget(CKEditor::className(), [
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
</div>


<?php ActiveForm::end(); ?>
