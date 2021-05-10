<?php
/**
 *Created by PhpStorm.
 * User: OKS
 * Date: 17.10.2018
 * Time: 0:17
 * @var $top_post  common\models\Post

 */
use yii\helpers\Url;
$this->title = __('Qidiruv') . " - " . Yii::$app->request->get('input');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="searching_results_page_wrapper">
    <div class="bcontainer">
        <div class="searching_result_title">
            <?=__('Результаты поиска')?>
        </div>
        <div class="serching_result_search_block">
            <form action="<?=Url::to('/site/search')?>" method="get" name="search-form">
                <div class="input_block">
                    <input type="text" name="input" placeholder="<?=Yii::$app->request->get('input')?>">
                </div>
                <button ></button>
            </form>
        </div>
        <div class="searching_result_block">
            <h1><?=__('Посты')?></h1>
            <?php echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item_view',
                'summary' => '',
                'pager' => [
                    'options' => [
                        'class' => 'minfin_pagination',
                    ],
                    'prevPageLabel' => '',
                    'nextPageLabel' => '',

                ]
            ]);
            ?>
            <h1><?=__('Страницы')?></h1>
            <?php echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProviderPages,
                'itemView' => '_item_pages_view',
                'summary' => '',
                'pager' => [
                    'options' => [
                        'class' => 'minfin_pagination',
                    ],
                    'prevPageLabel' => '',
                    'nextPageLabel' => '',

                ]
            ]);
            ?>
        </div>
    </div>
</div>

