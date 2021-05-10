<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index panel">
    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

                        'id',
            'type',
            'full_name',
            'phone',
            'email:email',
            //'message:ntext',
			'status',
            'created_at:date',

            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
