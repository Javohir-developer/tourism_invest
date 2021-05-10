<div class="index_useful_links_wrapper">
    <div class="bcontainer">
        <div class="index_useful_links_block">
            <?php if (count($attentions) > 0) : ?>
                <a href="<?=\yii\helpers\Url::to('/post/view/').$attentions->slug?>" class="left">
                    <div class="index_useful_links_title_block">
                        <div class="title"><?=__('Внимание')?></div>
                        <div class="line_block"></div>
                    </div>
                    <?php $image = $attentions->allFiles('image'); ?>
                    <div class="img">
                        <img src="<?=$image[0]->src('normal')?>" alt="">
                    </div>
                    <div class="description">
                        <div class="date">
                            <div class="day"><?=date('d', $attentions->published_on)?></div>
                            <div class="month"><?=date('M', $attentions->published_on)?></div>
                        </div>
                        <div class="text_block">
                            <div class="text"><?=$attentions->title?></div>
                            <div class="phone"><?=$attentions->intro?></div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            <div class="right">
                <div class="index_useful_links_title_block">
                    <div class="title"><?=__('Это полезно знать')?></div>
                    <div class="line_block"></div>
                </div>
                <ul>
                    <?php foreach ($usefuls as $useful) : ?>
                        <li>
                            <a href="<?=\yii\helpers\Url::to('/post/view/').$useful->slug?>">
                                <div class="img">
                                    <?php $image = $useful->allFiles('image'); ?>
                                    <img src="<?=$image[0]->src('low')?>" alt="">
                                </div>
                                <div class="title_block">
                                    <div class="title"><?=$useful->title?></div>
                                    <div class="subtitle"><?=__('ПОДРОБНО')?></div>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>