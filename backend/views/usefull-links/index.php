<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UsefullLinksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usefull Links';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo LangsWidgets::widget(); ?>

<div class="usefull-links-index panel">
    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= Html::a('Create Usefull Links', ['create'], ['class' => 'btn btn-success']) ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            [
                'label' => __('Image'),
                'format' => 'raw',
                'value' => function($data){
                        $image = $data->allFiles('image');
                    return Html::img($image[0]->src('small'),[
                        'style' => 'width:50px;'
                    ]);
                },
            ],

            'link',
            'status',
            //'order',
            //'lang',
            //'lang_hash',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
