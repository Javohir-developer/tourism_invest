<?php

use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;
use kartik\datetime\DateTimePicker;
use kartik\switchinput\SwitchInput;
use kartik\switchinput\SwitchInputAsset;
use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
SwitchInputAsset::register($this);

?>
<?php $form = ActiveForm::begin(); ?>

    <div class="col-md-7">
        <div class="post-form">
            <div class="col-sm-12">
                <div class="form-group">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true, 'class' => 'title-generate form-control']) ?>
                </div>
            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'slug')->textInput(['maxlength' => true, 'class' => 'form-control slug-generate']) ?>

            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'intro')->textarea(['row' => 3, 'maxlength' => true]) ?>

            </div>
        </div><!-- col-sm-6 -->
        <div class="col-sm-12">
            <div class="form-group">
                <?php echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
                <?= $form->field($model, 'content')->widget(CKEditor::className(), [
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

    <div class="col-lg-5">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title"><?= __('Image') ?></span>
            </div>
            <div class="panel-body">
                <?= \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                    'attribute' => 'Post[image]',
                    'id' => 'files_id_post',
                    'values' => $model->image,
                    'value_encode' => true
                ]);
                ?>
            </div>
        </div>

        <div class="panel-body">
            <?php
            echo DatePicker::widget([
                'name' => 'Post[published_on]',
                'value' => $model->published_on,
                'options' => ['placeholder' => 'Select issue date ...'],
                'pluginOptions' => [
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true
                ]
            ]);
            ?>
            <!-- As component -->

        </div>
        <div class="panel-body">
            <?php
            echo \oks\categories\widgets\CategoriesWidget::widget([
                'selected' => $model->categoriesSelected(),
                'type' => '300',
                'model_db' => $model,
                'name' => 'Post[category]'
            ]);
            ?>
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
            <?php
            echo $form->field($model, 'top')->checkbox(['data-init-plugin' => 'switchery']);
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
