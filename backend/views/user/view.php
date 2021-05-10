<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">
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
            'id',
            'username',
       //     'auth_key',
     //       'password_hash',
      //      'password_reset_token',
            'email:email',
            [
                'label' =>'Status',
                'attribute' =>'status',
                'value' => function($model){
                    if($model->status == \common\models\User::STATUS_ACTIVE){
                        return  'Activ';
                    }else{
                        return  'Deactiv';
                    }
                }
            ],
      //      'created_at',
       //     'updated_at',
            'phone',
           // 'company',
            [
                'label' =>'Restr',
                'attribute' =>'restr',
                'value' => function($model){

                        return  $model->getRestr()->one()->title;

                }
            ],
            [
                'label' =>'Type',
                'attribute' =>'type',
                'value' => function($model){
                    if($model->type == \common\models\User::TYPE_ADMIN){
                        return  'Admin';
                    }else{
                        return  'User';
                    }
                }
            ],
        //    'position',
        //    'region_id',
          //  'city_id',
        ],
    ]) ?>

</div>
