<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\RegionCourses */
/* @var $form yii\widgets\ActiveForm */

\wbraganca\fancytree\FancytreeAsset::register($this);
?>

<div class="region-courses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'disabled' => 'disabled']) ?>

    <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
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

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
        'attribute' => 'RegionCourses[image]',
        'id' => 'files_id_post',
        'values' => $model->image,
        'value_encode' => true
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
