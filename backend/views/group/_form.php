<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* CMS by OKS Technologies
*/
/* @var $this yii\web\View */
/* @var $model common\models\Group */
/* @var $form yii\widgets\ActiveForm */
$this->registerJs('
	$(".status-switcher").switcher({ theme: "square" });
	$("#group-persons").select2({ placeholder : "Выберите персонал"})
');
$persons = \common\models\Person::find()->select(['id', 'fullname'])->asArray()->all();
?>
<div class="col-md-7">
    <div class="group-form">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-sm-12">
            <div class="form-group">
                <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
            </div>
        </div>
    </div><!-- col-sm-6 -->
<!--    <div class="col-sm-12">-->
<!--        <div class="form-group">-->
<!--            --><?//= $form->field($model, 'persons')->dropDownList($persons, ['multiple' => true]) ?>
<!---->
<!--        </div>-->
<!--    </div><!-- col-sm-6 -->
</div><!-- row -->
<div class="col-lg-5">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <?php
            if(is_null($model->status)) {
                $model->status = true;
            }
            // Usage with ActiveForm and model
            echo $form->field($model, 'status')->checkbox();
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