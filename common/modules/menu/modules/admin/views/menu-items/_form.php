<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\JsExpression;
use oks\categories\models\Categories;
use dosamigos\selectize\SelectizeDropDownList;
use dosamigos\selectize\SelectizeTextInput;
use kartik\editable\Editable;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model common\modules\menu\models\MenuItems */
/* @var $form yii\widgets\ActiveForm */


$addon = <<< HTML
<span class="input-group-addon">
    <i class="glyphicon glyphicon-calendar"></i>
</span>
HTML;

?>

<div class="menu-items-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <?= $form->field($model, 'menu_item_parent_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
