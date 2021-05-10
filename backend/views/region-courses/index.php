<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RegionCoursesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Region Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo LangsWidgets::widget(); ?>
<div class="region-courses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Region Courses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description',
            'link',
            'image',
            //'slug',
            //'lang_hash',
            //'lang',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}'
            ],
        ],
    ]); ?>
</div>
