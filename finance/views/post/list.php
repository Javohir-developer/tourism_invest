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

<div class="news_page_wrapper">
    <div class="bcontainer">
        <div class="content_sidebar_wrapper">
            <div class="content">
                <?php if (!empty($top_posts)) : ?>
                    <a href="<?=\yii\helpers\Url::to('/post/view').$top_posts[0]->slug?>" class="news_page_top">
                        <div class="left">
                            <?php !empty($top_posts[0]->image) ? $image = $top_posts[0]->allFiles('image') : '' ?>
                            <img src="<?=$image[0]->src('normal')?>" alt="">
                        </div>
                        <div class="right">
                            <div class="right_title">
                                <?=$top_posts[0]->title?>
                            </div>
                            <div class="right_subtitle" style="height: 195px!important;">
                                <?= $top_posts[0]->content?>
                            </div>
                            <div class="datte">
                                <div class="data">
                                    <?=date('d.m.Y', $top_posts[0]->published_on)?>
                                </div>
                                <div class="view">
                                    <?=$top_posts[0]->view?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endif; ?>
                    <?php
                    echo \yii\widgets\ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_post_item_view',
                        'summary' => false,
                        'options' => [
                            'class' => 'news_content_wrapper',
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
           <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
        <?=\finance\widgets\Documents::widget()?>
    </div>
</div>