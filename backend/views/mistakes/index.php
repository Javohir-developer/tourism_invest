<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MistakesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mistakes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mistakes-index panel">

    <div class="panel-heading">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= Html::a('Create Mistakes', ['create'], ['class' => 'btn btn-success']) ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'route',
            'mistake',
            'comment',
            'status',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
