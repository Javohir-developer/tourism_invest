<?php

use yii\helpers\Url;

?>
<div class="index_news_block_wrapper">
    <div class="bcontainer">
        <div class="index_news_block_frame">
            <?php if (count($posts) > 0): ?>
                <div class="index_news_block">
                        <h2><?= __('Новости') ?></h2>
                        <a href="<?= Url::to('/post/view/') . $posts[0]->slug ?>" class="index_news">
                            <?php !empty($posts[0]->allFiles('image')) ? $image = $posts[0]->allFiles('image') : ''; ?>
                            <img src="<?= $image[0]->src('normal') ?>" alt="">
                            <div class="title"><?= $posts[0]->title ?></div>
                            <div class="info">
                                <div class="read_more"><?= __('Подробнее') ?></div>
                                <div class="date"><?= date('d.m.Y', $posts[0]->published_on) ?></div>
                            </div>
                        </a>
                        <ul class="list">
                            <?php unset($posts[0]); ?>
                            <?php foreach ($posts as $post) : ?>
                                <li>
                                    <a href="<?= Url::to('/post/view/') . $post->slug ?>">
                                        <span class="list_date"><?= date('d.m.Y', $post->published_on) ?></span>
                                        <span class="text"><?= $post->title ?></span>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?= Url::to('/post/list/news_center') ?>"
                           class="link_learn_more"><?= __('Все новости') ?></a>
                    </div>
            <?php endif; ?>
            <!--<div class="index_news_block">
                <div class="index_news_second_block">
                    <div class="title"><?/*= __('Тендеры и конкурсы') */?></div>
                    <?php /*foreach ($tenders as $tender) : */?>
                        <a href="<?/*= Url::to('/post/view/') . $tender->slug */?>" class="second_news">
                            <img src="<?/*= array_shift($tender->allFiles('image'))->src('normal') */?>" alt="">
                            <div class="title"><?/*= $tender->title */?></div>
                            <div class="info">
                                <div class="second_read_more"><?/*= __('Подробнее') */?></div>
                                <div class="date"><?/*= date('d,m,Y', $tender->published_on) */?></div>
                            </div>
                        </a>
                    <?php /*endforeach; */?>
                    <a href="<?/*= Url::to('/post/list/tenders') */?>"
                       class="link_learn_more"><?/*= __('Посмотреть все') */?></a>
                </div>
            </div>-->
            <div class="index_news_block">
                <h2><?= __('Внутренний портал') ?></h2>
               <div class="index-news-block-items">
                    <?php foreach ($inboxs as $inbox) : ?>
                            <div class="item">
                                <div class="item_title">
                                    <div class="title"><?= $inbox->title ?></div>
                                    <div class="subtitle"><?= $inbox->intro ?></div>
                                </div>
                                <a href="<?= Url::to('/post/view/') . $inbox->slug ?>"
                                class="item_link"><?= __('Перейти') ?></a>
                            </div>
                    <?php endforeach; ?>
               </div>
            </div>
        </div>
    </div>
