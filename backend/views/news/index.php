<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yangliklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--  BEGIN CONTENT PART  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="news-index">

            <h1 style="text-align: center"><?= Html::encode($this->title) ?></h1>

            <p style="float: right">
                <?= Html::a('Create News', ['create'], ['class' => 'btn btn-success']) ?>
            </p>


            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

//                    'id',
                    [
                        'attribute' => 'name_uz',
                        'value' => function($model){
                            return \yii\helpers\StringHelper::truncate($model->name_uz, 200,' ...' );
                        },
                    ],
//                    'name_ru',
//                    'name_en',

                    [
                        'attribute' => 'text_uz',
                        'value' => function($model){
                            return \yii\helpers\StringHelper::truncate($model->text_uz, 200,' ...' );
                        },
                    ],
                    //'text_ru:ntext',
                    //'text_en:ntext',
                    //'status',
                    'views',
                    'date',

                    [
                        'attribute' => 'images',
                        'format' => 'html',
                        'value' => function($model){
                            return Html::img('/../../../frontend/web/uploads/images/'. $model->images, ['width' => '70px']);
                        },
                    ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>


        </div>
    </div>
</div>
<!--  END CONTENT PART  -->




