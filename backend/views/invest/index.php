<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InvestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Invests';
$this->params['breadcrumbs'][] = $this->title;
?>




<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="invest-index">

            <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

            <p style="float: right">
                <?= Html::a('Create Invest', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'project_name',
                    'address',
                    'initiator',
                    'latitude',
                    'longitude',
                    //'uz_company_name',
                    //'uz_fio',
                    //'uz_address',
                    //'uz_tel',
                    //'uz_email:email',
                    //'uz_inn',
                    //'foreigner_company_name',
                    //'foreigner_fio',
                    //'foreigner_address',
                    //'foreigner_tel',
                    //'foreigner_email:email',
                    //'foreigner_country',
                    //'information_project_sum',
                    //'information_project_dollar',
                    //'information_dollar_course',
                    //'standart',
                    //'improvements',
                    //'semi_suite',
                    //'suite',
                    //'apartment',
                    //'number_of_beds',
                    //'number_of_rooms',
                    //'information_proof',
                    //'finance_self_sum',
                    //'finance_consumed_sum',
                    //'finance_credit_sum',
                    //'finance_credit_dollar',
                    //'finance_frr_dollar',
                    //'finance_foreign_line_dollar',
                    //'finance_investment_dollar',
                    //'finance_start_date',
                    //'finance_end_date',
                    //'short_description:ntext',
                    //'problems:ntext',
                    //'solving_problems:ntext',
                    //'kind_activity',
                    //'created_jobs',
                    //'square',
                    //'allocation',
                    //'service_bank',
                    //'add_new2',
                    //'add_new3',
                    //'information_project_sum1',
                    //'information_project_dollar1',
                    //'information_dollar_course1',
                    //'finance_credit_sum1',
                    //'finance_credit_dollar1',
                    //'finance_self_sum1',
                    //'finance_frr_dollar1',
                    //'finance_foreign_line_dollar1',
                    //'finance_investment_dollar1',
                    //'finance_start_date1',
                    //'finance_end_date1',
                    //'status_proyikt',
                    //'create_data',
                    //'image',
                    //'image1',
                    //'image2',
                    //'link',
                    //'status',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>


        </div>
    </div>
</div>
<!--  END CONTENT PART  -->

