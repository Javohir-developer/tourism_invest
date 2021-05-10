<?php

use oks\langs\widgets\LangsWidgets;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PhotoGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photo Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo LangsWidgets::widget(); ?>
<div class="photo-gallery-index panel">
    <div class="panel-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= Html::a('Create Photo Gallery', ['create'], ['class' => 'btn btn-success']) ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                [
                    'attribute' => 'id',
                    'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
                ],

                [
                    'attribute' => 'name',
                    'value' => function ($data) {
                        $lang = \oks\langs\components\Lang::getLangCode($data->lang);
                        return "<a href='" . \yii\helpers\Url::to(["/photo-gallery/update?id={$data->id}&setLang={$lang}"]) . "'>" . $data->name . "</a>";
//            return Html::a($data->name, ['photo-gallery/update', 'id' => $data->id]);
                    },
                    'format' => 'html'
                ],
                // 'image',
                ///    'sort',
                //     'description:ntext',
                //'status',
                //'lang_hash',
                //'lang',
                //'created_at',
                //'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {delete}',

                    'headerOptions' => ['style' => 'width:10%;'],
                    'contentOptions' => ['style' => 'width:10%;'],
                ],
            ],
        ]); ?>
    </div>

</div>
