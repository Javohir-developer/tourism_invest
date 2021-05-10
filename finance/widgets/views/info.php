
<div class="school_blok_wrapper">
    <div class="bcontainer">
        <div class="school_blok_frame">
            <div class="left">
                <div class="title"><?=__('Школа УзАСБО')?></div>
                <?php if (count($uzasbo) > 0) : ?>
                    <div class="school_blok">
                        <div class="img_block">
                            <?php $image = $uzasbo->allFiles('image'); ?>
                            <img src="<?=$image[0]->src('normal')?>" alt="">
                            <div class="text"><?=$uzasbo->title?></div>
                        </div>
                        <div class="text_block"><?=$uzasbo->intro?></div>
                        <div class="school_blok_link"><a href="<?=\yii\helpers\Url::to('/post/view/').$uzasbo->slug?>"><?=__('Перейти')?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="right">
                <?php if (count($buy) > 0) : ?>
                    <div class="title"><?=__('Госзакупки')?></div>

                    <div class="img_block">
                        <?php $image = $buy->allFiles('image'); ?>
                        <img src="<?=$image[0]->src('normal')?>" alt="">
                    </div>
                    <a href="<?=\yii\helpers\Url::to('/post/view/').$buy->slug?>" class="text_block"><?=$buy->title?></a>
                    <div
                            class="school_blok_link"><a href="<?=\yii\helpers\Url::to('/post/list/government')?>"><?=__('Посмотреть все')?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>