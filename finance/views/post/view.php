<?php

use common\modules\settings\models\Settings;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
$this->title = $model->title;
\yii\web\YiiAsset::register($this);
if($model->image){
    $images = $model->allFiles('image')[0]->src('low');
}else{
    $images = '';
}
$this->title = __('Posts');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="single_page_wrapper">
    <div class="bcontainer">
        <div class="top_link_url_wrapper">
            <?=\yii\widgets\Breadcrumbs::widget([
                'homeLink' => [
                    'label' => __('Bosh sahifa'),
                    'url' => Yii::$app->homeUrl,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        </div>
        <div class="content_sidebar_wrapper">
            <div class="content">
                <div class="single_top_info">
                    <div class="bgc_white">
                        <div class="single_top_block">
                            <div class="left_block">
                                <img src="<?=$images?>" alt="">
                            </div>
                            <div class="right_block">
                                <div class="title">
                                    <?=$model->title?>
                                </div>
                                <div class="subtitle">
                                    <?=$model->intro?>
                                </div>
                            </div>
                        </div>
                        <div class="single_bottom_text">
                            <?=$model->content?>
                        </div>
                        <div class="bloc_printer">
                            <div class="left">
                                <div class="date">
                                    <?=date('d.m.Y', $model->published_on)?>
                                </div>
                                <div class="view">
                                    <?=$model->view?>
                                </div>
                            </div>
                            <div class="social_buttons">
                                <ul>
                                    <li>
                                        <a href="<?=Settings::value('instagram')?>">
                                            <img src="<?=$this->getImageUrl('img/vk_single.svg')?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Settings::value('facebook-social')?>">
                                            <img src="<?=$this->getImageUrl('img/facebook_single.svg')?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Settings::value('twitter-social')?>">
                                            <img src="<?=$this->getImageUrl('img/twitter_single.svg')?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?=Settings::value('telegram-social')?>">
                                            <img src="<?=$this->getImageUrl('img/telegram_single.svg')?>" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="right">
                                <a class="print"><?=__('Распечатать')?></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_slider_title">
                        <?=__('Похожие новости')?>
                    </div>
                    <div class="single_bottom_slider owl-carousel">
                        <?php foreach ($related_post as $post) : ?>
                            <a href="<?=\yii\helpers\Url::to('/post/view/').$post->slug?>" class="single_item">
                                <?php
                                if($post->image){
                                    $images = $post->allFiles('image')[0]->src('low');
                                }else{
                                    $images = '';
                                }
                                ?>
                                <img src="<?=$images?>" alt="">
                                <div class="slider_text">
                                    <?=$post->title?>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>
