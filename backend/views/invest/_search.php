<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InvestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="invest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'city_id') ?>

    <?= $form->field($model, 'region_id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'initiator') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'uz_company_name') ?>

    <?php // echo $form->field($model, 'uz_fio') ?>

    <?php // echo $form->field($model, 'uz_address') ?>

    <?php // echo $form->field($model, 'uz_tel') ?>

    <?php // echo $form->field($model, 'uz_email') ?>

    <?php // echo $form->field($model, 'uz_inn') ?>

    <?php // echo $form->field($model, 'foreigner_company_name') ?>

    <?php // echo $form->field($model, 'foreigner_fio') ?>

    <?php // echo $form->field($model, 'foreigner_address') ?>

    <?php // echo $form->field($model, 'foreigner_tel') ?>

    <?php // echo $form->field($model, 'foreigner_email') ?>

    <?php // echo $form->field($model, 'foreigner_country') ?>

    <?php // echo $form->field($model, 'information_project_sum') ?>

    <?php // echo $form->field($model, 'information_project_dollar') ?>

    <?php // echo $form->field($model, 'information_dollar_course') ?>

    <?php // echo $form->field($model, 'standart') ?>

    <?php // echo $form->field($model, 'improvements') ?>

    <?php // echo $form->field($model, 'semi_suite') ?>

    <?php // echo $form->field($model, 'suite') ?>

    <?php // echo $form->field($model, 'apartment') ?>

    <?php // echo $form->field($model, 'number_of_beds') ?>

    <?php // echo $form->field($model, 'number_of_rooms') ?>

    <?php // echo $form->field($model, 'information_proof') ?>

    <?php // echo $form->field($model, 'finance_self_sum') ?>

    <?php // echo $form->field($model, 'finance_consumed_sum') ?>

    <?php // echo $form->field($model, 'finance_credit_sum') ?>

    <?php // echo $form->field($model, 'finance_credit_dollar') ?>

    <?php // echo $form->field($model, 'finance_frr_dollar') ?>

    <?php // echo $form->field($model, 'finance_foreign_line_dollar') ?>

    <?php // echo $form->field($model, 'finance_investment_dollar') ?>

    <?php // echo $form->field($model, 'finance_start_date') ?>

    <?php // echo $form->field($model, 'finance_end_date') ?>

    <?php // echo $form->field($model, 'short_description') ?>

    <?php // echo $form->field($model, 'problems') ?>

    <?php // echo $form->field($model, 'solving_problems') ?>

    <?php // echo $form->field($model, 'kind_activity') ?>

    <?php // echo $form->field($model, 'created_jobs') ?>

    <?php // echo $form->field($model, 'square') ?>

    <?php // echo $form->field($model, 'allocation') ?>

    <?php // echo $form->field($model, 'service_bank') ?>

    <?php // echo $form->field($model, 'add_new2') ?>

    <?php // echo $form->field($model, 'add_new3') ?>

    <?php // echo $form->field($model, 'information_project_sum1') ?>

    <?php // echo $form->field($model, 'information_project_dollar1') ?>

    <?php // echo $form->field($model, 'information_dollar_course1') ?>

    <?php // echo $form->field($model, 'finance_credit_sum1') ?>

    <?php // echo $form->field($model, 'finance_credit_dollar1') ?>

    <?php // echo $form->field($model, 'finance_self_sum1') ?>

    <?php // echo $form->field($model, 'finance_frr_dollar1') ?>

    <?php // echo $form->field($model, 'finance_foreign_line_dollar1') ?>

    <?php // echo $form->field($model, 'finance_investment_dollar1') ?>

    <?php // echo $form->field($model, 'finance_start_date1') ?>

    <?php // echo $form->field($model, 'finance_end_date1') ?>

    <?php // echo $form->field($model, 'status_proyikt') ?>

    <?php // echo $form->field($model, 'create_data') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'image1') ?>

    <?php // echo $form->field($model, 'image2') ?>

    <?php // echo $form->field($model, 'link') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
