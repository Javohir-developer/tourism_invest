<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index panel">
    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>

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
          //  'email:email',
            [
                    'label' =>'Status',
                    'attribute' =>'status',
                    'value' => function($model){
                        if($model->status == \common\models\User::STATUS_ACTIVE){
                          return  'Active';
                        }else{
                            return  'Deactive';
                        }
                    }
            ],
            'created_at:date',
            //'updated_at',
            //'phone',
            //'position',
            //'region_id',
            //'city_id',
            [
                    'label' => 'USER',
                    'attribute' =>'type',
                    'value' => function($model){
                    if($model->type == 1){
                        return 'Admin';
                    }else{
                        return 'User';
                    }
                    }
            ],
            [
                'label' =>'Restr',
                'attribute' =>'restr',
                'value' => function($model){
                    if($model->restr == '1'){
                        return  'YES';
                    }else{
                        return  'NO';
                    }
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
