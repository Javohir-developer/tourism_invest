<?php

use oks\langs\widgets\LangsWidgets;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
$all_categories = \oks\categories\models\Categories::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->select(['id', 'name'])->asArray()->all();
foreach ($all_categories as $category) {
    $all_category[$category['id']] = $category['name'];
}
?>
<?php  echo LangsWidgets::widget(); ?>
<div class="post-index panel panel-fresh">
    <div class="panel-body">
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                'id',
                [
                    'attribute' => 'title',
                    'content' => function($data){
                        $lang = \oks\langs\components\Lang::getLangCode($data->lang);
                        return "<a href='" . \yii\helpers\Url::to(["/post/update/{$data->id}?&setLang={$lang}"]) . "'>" . $data->title . "</a>";
                    },
                    'headerOptions' => ['style' => 'width:60%'],
                ],
                [
                    'label' => 'category',
                    'attribute' => 'category',
                    'value' => function ($model) {
                        foreach ($model->categories as $category) {
                            $categories .= $category->name . ', ';
                        };
                        return $categories;
                    },
                    'filter' =>  Html::activeDropDownList($searchModel, 'category', $all_category,['class'=>'form-control','prompt' => 'Select Category']),
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'width: 20%'],
                ],
                [
                    'label' => 'Top',
                    'attribute' => 'top',
                    'filter' => ['1' => 'TOP', '0' => 'NO TOP'],
                    'format' => 'raw',
                    'headerOptions' => ['style' => 'width: 10%'],
                ],
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
