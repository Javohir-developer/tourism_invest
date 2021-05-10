<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
/**
 * CMS by OKS Technologies
 */
/* @var $this yii\web\View */
/* @var $model \frontend\models\SignupForm */
/* @var $form yii\widgets\ActiveForm */

$data = \yii\helpers\ArrayHelper::map($region, 'id', 'name');
$this->registerJs(<<< JS
	const cities = $("#signupform-city_id option");
	$("#signupform-region_id").on("change", function() {
		let region = $(this).val();
		$("#signupform-city_id option").remove();
		cities.each(function() {
			if ($(this).data('region') == region) {
				$("#signupform-city_id").append(this);
			}
		})
	})
JS
);
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-8">

        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'username')->textInput() ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'email')->textInput() ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <? if (!$model->username) $form->field($model, 'password')->passwordInput() ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group no-margin-hr">
                <?= $form->field($model, 'phone')->textInput() ?>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group no-margin-hr">
            <label class="control-label"><?=__('Status')?></label>
            <?
            echo $form->field($model, 'status')->dropDownList([
                User::STATUS_ACTIVE => __("Active"),
                User::STATUS_DELETED => __("Deactive"),
            ])->label(false);
            ?>
        </div>
        <div class="form-group no-margin-hr">
            <label class="control-label"><?=__('Restr')?></label>
            <?
            echo $form->field($model, 'restr')->dropDownList([
                User::TYPE_RESTR => __("Active"),
                User::TYPE_NORESTR => __("Deactive"),
            ])->label(false);
            ?>
        </div>
        </div>
    </div>
</div>


<?php ActiveForm::end(); ?>

