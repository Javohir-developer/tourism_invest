<?php

use common\modules\settings\models\Settings;

/* @var $this yii\web\View */
/* @var $model common\models\Documents */
$this->title = $model->title;
\yii\web\YiiAsset::register($this);
if($model->image){
    $images = $model->allFiles('image')[0]->src('low');
}else{
    $images = '';
}
?>
<div class="single_page_wrapper">
    <div class="bcontainer">
        <div class="single_block">
            <div class="top_social_block">
                <a class="print"><img src="<?=$this->getImageUrl('/img/single_print.svg')?>" alt=""></a>
                <a href="<?=Settings::value('telegram-social')?>"><img src="<?=$this->getImageUrl('/img/telegram.svg')?>" alt=""></a>
                <a href="<?=Settings::value('facebook-social')?>"><img src="<?=$this->getImageUrl('/img/facebook.svg')?>" alt=""></a>
                <a href="<?=Settings::value('twitter-social')?>"><img src="<?=$this->getImageUrl('/img/twitter.svg')?>" alt=""></a>
            </div>
            <div class="single_top_item_block">
                <div class="left">
                    <div class="date"><?=date('d M', $model->published_on)?></div>
                    <div class="title">
                        <?=$model->title ?>
                    </div>
                    <div class="subtitle">
                        <?=$model->intro?>
                    </div>
                </div>
                <div class="right">
                    <img src="<?=$images?>" alt="">
                </div>
                <div class="single_text_block">
                    <?=$model->content?>
                </div>
            </div>
            <div class="top_social_block no_margin_bottom">
                <a class="print"><img src="<?=$this->getImageUrl('/img/single_print.svg')?>" alt=""></a>
                <a href="<?=Settings::value('telegram-social')?>"><img src="<?=$this->getImageUrl('/img/telegram.svg')?>" alt=""></a>
                <a href="<?=Settings::value('facebook-social')?>"><img src="<?=$this->getImageUrl('/img/facebook.svg')?>" alt=""></a>
                <a href="<?=Settings::value('twitter-social')?>"><img src="<?=$this->getImageUrl('/img/twitter.svg')?>" alt=""></a>
            </div>
        </div>
        <div class="single_similar_news_wrapper">
            <div class="similar_news_title">
                <?=__('Похожие новости')?>
            </div>
            <div class="single_similar_news_block">
                <?php foreach ($related_post as $post) : ?>
                    <a href="<?=\yii\helpers\Url::to('/post/view/').$post->slug?>">
                        <div class="img_block">
                            <?php
                            if($post->image){
                                $images = $post->allFiles('image')[0]->src('low');
                            }else{
                                $images = '';
                            }
                            ?>
                            <img src="<?=$images?>" alt="">
                        </div>
                        <div class="text_block">
                            <div class="date"><?=date('d M', $post->published_on)?></div>
                            <div class="title">
                                <?=$post->title?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <?=\frontend\widgets\News_footer::widget()?>
    </div>
</div>
