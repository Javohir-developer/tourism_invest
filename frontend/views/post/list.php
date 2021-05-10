<?php
/**
 *Created by PhpStorm.
 * User: OKS
 * Date: 17.10.2018
 * Time: 0:17
 * @var $top_post  common\models\Post

 */

$this->title = __('Yangiliklar');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news_page_top_wrapper">
    <div class="bcontainer">
        <div class="news_page_title">
            <span class="title"><?=__('Новости и объявления')?></span>
            <span class="line_solid"></span>
        </div>
        <div class="news_block_wrapper">
            <div class="news_top_block">
                <?php if (!empty($top_posts)) : ?>
                    <div class="left">
                        <?php $image = $top_posts[0]->allFiles('image'); ?>
                        <img src="<?=$image[0]->src('low')?>" alt="">
                        <div class="title">
                            <?=$top_posts[0]->title?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (!empty($top_posts[1])) : ?>
                    <div class="right">
                        <div class="img_block">
                            <?php $image = $top_posts[1]->allFiles('image'); ?>
                            <img src="<?=$image[0]->src('low')?>" alt="">
                        </div>
                        <div class="text_block">
                            <div class="date">
                                <?=date('d M', $top_posts[1]->published_on)?>
                            </div>
                            <div class="title">
                                <?=$top_posts[1]->title?>
                            </div>
                            <div class="subtitle">
                                <?=$top_posts[1]->view?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
                <?php
                echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_post_item_view',
                    'summary' => false,
                    'options' => [
                        'class' => 'news_items_block',
                    ],
                    'itemOptions' => [
                        'tag' => false,
                    ],
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
<?= \frontend\widgets\UsefullLinks::widget() ?>