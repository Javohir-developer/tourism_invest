<?php

use oks\langs\widgets\LangsWidgets;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
$langs = \common\models\Language::getLangByArray();

?>

<?php echo LangsWidgets::widget(); ?>
<div class="pages-index panel">
    <div class="panel-body">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= Html::a('Create Pages', ['create'], ['class' => 'btn btn-success']) ?>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'title',
                    'content' => function ($data) {
                        $lang = \oks\langs\components\Lang::getLangCode($data->lang);
                        return "<a href='" . \yii\helpers\Url::to(["/pages/update/{$data->id}?&setLang={$lang}"]) . "'>" . $data->title . "</a>";
                    },
                    'headerOptions' => ['style' => 'width:80%'],
                ],
                //'view',
                //'status',
                //'created_at',
                //'updated_at',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{view} {delete}',

                    'headerOptions' => ['style' => 'width:15%;'],
                    'contentOptions' => ['style' => 'width:15%;'],
                ],

            ],
        ]); ?>
    </div>

</div>
