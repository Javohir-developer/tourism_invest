<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Group';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index panel">
    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= Html::a('Create Group', ['create'], ['class' => 'btn btn-success']) ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        'id',
            'category',
            'persons',
            'status',
            'created_at:date',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
