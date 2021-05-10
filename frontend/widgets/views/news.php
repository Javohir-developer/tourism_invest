<div class="index_news_and_ads_wrapper">
    <div class="bcontainer">
        <div class="index_news_and_ads_block">
            <div class="left">
                <div class="news">
                    <div class="title"><?=__('Новости и объявления')?></div>
                    <a href="<?=\yii\helpers\Url::to('/post/list/news')?>" class="subtitle"><?=__('Посмотреть все новости')?></a>
                    <?php if (!empty($top_post)) : ?>
                        <a href="<?=\yii\helpers\Url::to('/post/view/').$top_post[0]->slug?>" class="img">
                            <?php !empty($top_post[0]->image) ? $image = $top_post[0]->allFiles('image') : '' ?>
                            <img src="<?= !empty($image) ? $image[0]->src('low') : ''?>" alt="">
                            <div class="img_date"><span><?=date('d', $top_post[0]->published_on)?> </span><span><?=date('M', $top_post[0]->published_on)?></span>
                            </div>
                            <div class="img_title"><?=$top_post[0]->title?></div>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="list">
                    <div class="line_block"></div>
                    <?php foreach ($posts as $post) : ?>
                        <a href="<?=\yii\helpers\Url::to('/post/view/').$post->slug?>" class="link_day_news">
                            <div class="day_news_img_block">
                                <?php !empty($post->image) ? $image = $post->allFiles('image') : '' ?>
                                <img src="<?= !empty($image) ? $image[0]->src('low') : ''?>" alt="">
                            </div>
                            <div class="day_news_title_block">
                                <div class="date">
                                    <div class="day"><?=date('d', $post->published_on)?></div>
                                    <div class="month"><?=date('M', $post->published_on)?></div>
                                </div>
                                <div class="list_title"><?= \yii\helpers\StringHelper::truncate($post->title, '80', '...')?></div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right">
                <img src="<?=$this->getImageUrl('/img/ts2.jpg')?>" alt="">
                <div class="mask_color">
                    <div class="mask_title"><?=$category?></div>
                    <ul>
                        <?php foreach ($price_news as $post) : ?>
                            <li><a href="<?=\yii\helpers\Url::to('/post/view/').$post->slug?>"><?=$post->title?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>