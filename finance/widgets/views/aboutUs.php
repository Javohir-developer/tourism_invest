<?php
/**
 * @var $posts \common\models\Post
 * @var $post \common\models\Post
 */
?>
<div class="blog-featured">
    <div class="bcontainer">
        <div class="blog-featured_title" style="padding-top: 40px;margin-top: 20px;"><?=__('Профессорско-педагогический состав')?></div>
    </div>
    <div class="skin-posts-slider content-wrapper txt-on-gradient start" data-autoplay="auto">
        <div class="slider-images swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper">
                <?php foreach ($persons as $person) : ?>
                    <div class="swiper-slide va-middle swiper-slide-active">
                        <a target="_self">
                            <div class="post-image round bgr-cover">
                                <?php $image = $person->allFiles('image'); ?>
                                <img src="<?=$image[0]->src('normal')?>" alt="112">
                            </div>
                        </a>
                    </div>
               <?php endforeach; ?>
            </div>
        </div>
        <div class="slider-content swiper-container content-wrapper swiper-container-horizontal swiper-container-fade">
            <div class="swiper-wrapper">
                <?php foreach ($persons as $person) : ?>
                    <div class="swiper-slide">
                        <div class="post-wrapper clearfix show">
                            <div class="post-title">
                                <a class="cut-by-lines" data-lines-limit="2" href="<?=\yii\helpers\Url::to('/person/teacher/')?>" target="_self">
                                    <span class="title"><?=$person->fullName?></span>
                                    <span class="subtitle"><?=__('Должность: ')?><?=$person->position?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="navigation va-middle">
                <div class="nav-wheel content-pad txt-color-to-svg">
                    <a class="va-middle" href="" target="_self">
                        <img src="<?=$this->getImageUrl('img/eye.svg')?>" alt="">
                    </a>
                </div>
                <div class="prev nav txt-color-to-svg swiper-button-disabled">
                    <div class="elastic-arrow left txt-color-to-svg">
                        <img src="<?=$this->getImageUrl('img/down-arrow.svg')?>" alt="">
                    </div>
                </div>
                <div class="next nav txt-color-to-svg">
                    <div class="elastic-arrow right txt-color-to-svg">
                        <img src="<?=$this->getImageUrl('img/down-arrow.svg')?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="separator">
            <div class="v-line txt-color-to-bgr"></div>
        </div>
    </div>
</div>
