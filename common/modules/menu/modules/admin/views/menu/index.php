<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\widgets\Pjax;
use kartik\daterange\DateRangePicker;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\menu\models\MenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = __('Menus');
$this->params['breadcrumbs'][] = $this->title;

echo LangsWidgets::widget();

?>
<div class="menu-index panel">
    <div class="panel-heding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a(__('Create Menu'), ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn',
                    'headerOptions' => ['style' => 'width:8%'],
                ],
                [
                    'attribute' => 'title',
                    'content' => function($data){
                        return "<a href='".\yii\helpers\Url::to(['/menu/menu/update','id' => $data->menu_id])."'>".$data->title."</a>";
                    },
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}',

                    'headerOptions' => ['style' => 'width:15%;'],
                    'contentOptions' => ['style' => 'width:15%;'],
                ],
            ],
        ]); ?>
    </div>
</div>
