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

<div class="site_search_page_wrapper">
    <div class="site_search_page_form">
        <div class="bcontainer">
            <form action="<?=Url::to('/site/search')?>" autocomplete="off">
                <div class="input_block">
                    <input type="text" name="input" id="sdsd" placeholder="<?=Yii::$app->request->get('input')?>">
                    <button></button>
                </div>
            </form>
        </div>
    </div>
    <div class="bcontainer">
        <div class="result_wrapper">
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

