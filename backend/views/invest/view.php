<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Invest */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Invests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>





<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="invest-view">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'city_id',
                    'region_id',
                    'project_name',
                    'address',
                    'initiator',
                    'latitude',
                    'longitude',
                    'uz_company_name',
                    'uz_fio',
                    'uz_address',
                    'uz_tel',
                    'uz_email:email',
                    'uz_inn',
                    'foreigner_company_name',
                    'foreigner_fio',
                    'foreigner_address',
                    'foreigner_tel',
                    'foreigner_email:email',
                    'foreigner_country',
                    'information_project_sum',
                    'information_project_dollar',
                    'information_dollar_course',
                    'standart',
                    'improvements',
                    'semi_suite',
                    'suite',
                    'apartment',
                    'number_of_beds',
                    'number_of_rooms',
                    'information_proof',
                    'finance_self_sum',
                    'finance_consumed_sum',
                    'finance_credit_sum',
                    'finance_credit_dollar',
                    'finance_frr_dollar',
                    'finance_foreign_line_dollar',
                    'finance_investment_dollar',
                    'finance_start_date',
                    'finance_end_date',
                    'short_description:ntext',
                    'problems:ntext',
                    'solving_problems:ntext',
                    'kind_activity',
                    'created_jobs',
                    'square',
                    'allocation',
                    'service_bank',
                    'add_new2',
                    'add_new3',
                    'information_project_sum1',
                    'information_project_dollar1',
                    'information_dollar_course1',
                    'finance_credit_sum1',
                    'finance_credit_dollar1',
                    'finance_self_sum1',
                    'finance_frr_dollar1',
                    'finance_foreign_line_dollar1',
                    'finance_investment_dollar1',
                    'finance_start_date1',
                    'finance_end_date1',
                    'status_proyikt',
                    'image',
                    'image1',
                    'image2',
                    'link',
                    'status',
                ],
            ]) ?>

        </div>
    </div>
</div>
<!--  END CONTENT PART  -->

