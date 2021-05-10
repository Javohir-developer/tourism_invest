<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\modules\menu\models\MenuItemsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menu Items';
$this->params['breadcrumbs'][] = $this->title;

echo LangsWidgets::widget();

?>
<div class="menu-items-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menu Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
            'attribute' => 'title'
            ],

            //'menu_item_id',
            //'menu_id',
            //'title',
            //'url:ntext',
            //'sort',
            //'menu_item_parent_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
