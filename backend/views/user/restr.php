<?php

use common\models\Restr;
use yii\grid\ActionColumn;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'RESTR';
?>
<div class="user-index panel">
    <div class="panel-body">
        <?= Html::a('Create RESTR', ['create_restr'], ['class' => 'btn btn-success']) ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //             'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
           // 'email:email',
            [
                'attribute' => 'restr',
                'value' => function($model){
                    return $model->getRestr()->one()->title;
                },
                'filter' => Html::activeDropDownList($searchModel, 'restr', \yii\helpers\ArrayHelper::map(Restr::find()->all(), 'id','title'), ['class'=> 'form-control', 'prompt'=> '']),
            ],

            [
                    'label' =>'Status',
                    'attribute' =>'status',
                    'value' => function($model){
                        if($model->status == \common\models\User::STATUS_ACTIVE){
                          return  'Active';
                        }else{
                            return  'Deactive';
                        }
                    },

            ],
            'created_at:date',
            //'updated_at',
            //'phone',
            //'position',
            //'region_id',
            //'city_id',
            ['class' => ActionColumn::className(),
                'template'=>'{update} {view} {delete}',
                'buttons' => [
                    'update' => function ($url,$model,$key) {
                        return Html::a('  ',  ['/user/update_restr/', 'id' => $model->id], ['class' => 'glyphicon glyphicon-pencil']);
                    },

                ]

            ],
            ],
        ]); ?>
                    </div>

</div>
