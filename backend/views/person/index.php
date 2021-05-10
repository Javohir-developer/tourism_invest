<?php

use oks\langs\widgets\LangsWidgets;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php echo LangsWidgets::widget(); ?>
<div class="person-index panel">
    <div class="panel-body">
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id',
                'fullName',
                'phone',
                'fax',
                'email:email',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update} {delete}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            $lang = \oks\langs\components\Lang::getLangCode($model->lang);
                            return Html::a('', $url."?setLang={$lang}", ['class' => 'glyphicon glyphicon-pencil']);
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
