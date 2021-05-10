<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FaqSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faqs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faq-index panel">
    <?php echo \oks\langs\widgets\LangsWidgets::widget(); ?>
	<?= Html::a(__('Create FAQ'), ['create'], ['class' => 'btn btn-success']) ?>

    <div class="panel-body">
                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'question:html',
            'answer:html',
            'lang',
//            'lang_hash',
            'status',
            'created_at:date',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
            ],
            ]); ?>
                    </div>

</div>
