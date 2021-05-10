<?php

use oks\langs\widgets\LangsWidgets;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VideoGallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Video Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo LangsWidgets::widget(); ?>
<div class="video-gallery-index panel">
    <div class="panel-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= Html::a('Create Video Gallery', ['create'], ['class' => 'btn btn-success']) ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'name',
                'video',
                'sort',
                'description:ntext',
                //'status',
                //'lang_hash',
                //'lang',
                //'created_at',
                //'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            $lang = \oks\langs\components\Lang::getLangCode($model->lang);
                            return Html::a('', $url."&setLang={$lang}", ['class' => 'glyphicon glyphicon-pencil']);
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('', $url, ['class' => 'glyphicon glyphicon-trash']);
                        }
                    ]
                ],
            ],
        ]); ?>
    </div>

</div>
