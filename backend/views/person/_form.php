<?php

use dosamigos\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * CMS by OKS Technologies
 */
/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $form yii\widgets\ActiveForm */
/* @var $region \common\models\Region[] */

?>

<div class="col-md-7">
    <div class="post-form">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div><!-- col-sm-6 -->
    <div class="col-sm-12">
        <div class="form-group">
            <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
            <?= $form->field($model, 'bio')->widget(CKEditor::className(), [
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
        <div class="form-group">
            <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
            <?= $form->field($model, 'duties')->widget(CKEditor::className(), [
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
    <div class="col-sm-12">
        <div class="form-group">
            <div class="panel form-horizontal">
                <div class="panel-heading">
                    <span class="panel-title">Reception</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php $reception = explode('|', $model->reception); ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="resiption[1]" class="control-label">Понедельник</label>
                                <input type="text" class="form-control" name="reception[1]"
                                       value="<?= $reception[0] ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="resiption[2]" class="control-label">Вторник</label>
                                <input type="text" class="form-control" name="reception[2]"
                                       value="<?= $reception[1] ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="resiption[3]" class="control-label">Среда</label>
                                <input type="text" class="form-control" name="reception[3]"
                                       value="<?= $reception[2] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label for="resiption[4]" class="control-label">Четверг</label>
                                <input type="text" class="form-control" name="reception[4]"
                                       value="<?= $reception[3] ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label for="resiption[5]" class="control-label">Пятница</label>
                                <input type="text" class="form-control" name="reception[5]"
                                       value="<?= $reception[4] ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group no-margin-hr">
                                <label for="resiption[6]" class="control-label">Суббота</label>
                                <input type="text" class="form-control" name="reception[6]"
                                       value="<?= $reception[5] ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- row -->
<div class="col-lg-5">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title"><?= __('Image') ?></span>
        </div>
        <div class="form-group">
            <?= \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                'attribute' => 'Person[image]',
                'id' => 'files_id_post',
                'values' => $model->image,
                'value_encode' => true
            ]);
            ?>
        </div>
    </div>
    <div style="display: none;"><?= \oks\categories\widgets\CategoriesWidget::widget(); ?></div>

    <div class="form-group">
        <?= $form->field($model, 'type')->dropDownList([
            \common\models\Person::TYPE_TEACHER => 'Учителя',
            \common\models\Person::TYPE_HEAD => 'Рукаводство',
            \common\models\Person::TYPE_RECEPTION => 'Reception',
        ]) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'type_to')->dropDownList(['0' => 'Портал', '1' => 'Центр']) ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'phone')->textInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'email')->textInput() ?>
    </div>
    <div class="form-group">
        <?= $form->field($model, 'sort')->textInput() ?>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <?php
            if (is_null($model->status)) {
                $model->status = true;
            }
            // Usage with ActiveForm and model
            echo $form->field($model, 'status')->checkbox(['data-init-plugin' => 'switchery']);
            ?>
        </div>
    </div>
</div>
<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>
</div>

<?php ActiveForm::end(); ?>

</div>