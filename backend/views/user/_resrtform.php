<?php

use common\components\DatetimeHelper;
use dosamigos\ckeditor\CKEditor;
use yii\captcha\Captcha;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
/**
 * CMS by OKS Technologies
 */
/* @var $this yii\web\View */
/* @var $model \frontend\models\SignupForm */
/* @var $form yii\widgets\ActiveForm */
$this->title = 'RESTR';
$days = DatetimeHelper::getCurrentMonthDays();
$months = DatetimeHelper::getMonths();
$years = DatetimeHelper::getYears();

yii\web\JqueryAsset::register($this);
yii\jui\JuiAsset::register($this);

?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-8">

        <div class="col-sm-12">
        <div class="tt"><?=__('Фамилия')?></div>
        <div class="form-group">
            <?= $form->field($model, 'surname')->input('surname',['placeholder' =>'Петров'])->label(false)?>
        </div>
        <div class="tt"><?=__('Имя')?></div>
        <div class="form-group">
            <?= $form->field($model, 'username',['options' => array('tag' => false), 'template' => '{input} {error}'])->input('username', ['placeholder' => 'Иван'])->label(false) ?>
        </div>
        <div class="tt"><?=__('Отчество')?></div>
        <div class="form-group">
            <?= $form->field($model, 'fathet_name',['options' => array('tag' => false), 'template' => '{input} {error}'])->input('father_name', ['placeholder' => 'Иванович'])->label(false) ?>
        </div>
        <div class="tt"><?=__('Электронная почта')?></div>
        <div class="form-group">
            <?= $form->field($model, 'email')->input('email', ['placeholder' => 'Email'])->label(false) ?>
        </div>
        <div class="tt"><?=__('Дата рождения')?></div>
        <div class="form-group">
            <div class="selects">
                <select name="SignupForm[day]" class="select_day">
                    <option></option>
                    <?php foreach($days as $day): ?>
                        <option value="<?=$day?>"><?=$day?></option>
                    <?php endforeach; ?>
                </select>
                <select name="SignupForm[month]" class="select_month">
                    <option></option>
                    <?php foreach($months as $key=>$month): ?>
                        <option value="<?=$key?>"><?=$month?></option>
                    <?php endforeach; ?>
                </select>
                <select name="SignupForm[year]" class="select_year">
                    <option></option>
                    <?php foreach($years as $year): ?>
                        <option value="<?=$year?>"><?=$year?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="tt"><?=__('Номер ИНН')?></div>
        <div class="form-group">
            <?= $form->field($model, 'inn')->input('inn',['placeholder'=>'598***489'])->label(false) ?>
        </div>
            <?php
            $data = ArrayHelper::merge(['Выберите...'], ArrayHelper::map(\common\models\Position::find()->all(),'id','title'));
            ?>
            <?= $form->field($model, 'position_id')->dropDownList($data) ?>

            <?php  echo \oks\filemanager\widgets\ModalWidget::widget(); ?>
            <?= $form->field($model, 'description')->widget(CKEditor::className(), [
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

        <div class="col-sm-12">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    </div>
    <div class="col-sm-4">
        <div class="tt"><?=__('Пароль')?></div>
        <div class="form-group no-margin-hr">
            <?= $form->field($model, 'password')->input('text',['placeholder'=>'**********'])->label(false)?>
        </div>
        <div class="form-group no-margin-hr">
            <label class="control-label"><?=__('Status')?></label>
            <?
            echo $form->field($model, 'status')->dropDownList([
                User::STATUS_ACTIVE => __("Active"),
                User::STATUS_DELETED => __("Deactive"),
            ])->label(false);
            ?>
        </div>
        <?php
        $data = ArrayHelper::merge(['Выберите...'], ArrayHelper::map(\common\models\Restr::find()->all(),'id','title'));
        ?>
        <?= $form->field($model, 'restr')->dropDownList($data) ?>
        <?= $form->field($model, 'accept')->hiddenInput(['value'=> '1'])->label(false);?>
        <div class="panel-heading">
            <span class="panel-title"><?=__('Image')?></span>
        </div>
        <div class="panel-body">
            <?= \oks\filemanager\widgets\InputModalWidget::widget(['form' => $form,
                'attribute' => 'User[image]',
                'id' => 'files_id_user',
                'values' => $model->image,
                'value_encode' => true
            ]);
            ?>
        </div>

        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>

