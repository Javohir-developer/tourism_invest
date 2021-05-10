<?php
/**
 * @var $posts \common\models\Post
 * @var $post \common\models\Post
 */
?>
<section class="about_us">
    <div class="container">
        <div class="title"><?=__('OAV Biz haqimizda')?></div>
        <div class="row">
            <?php if (!empty($posts)) : ?>
                <?php foreach ($posts as $post) : ?>
                    <div class="col-md-3">
                        <a href="<?=\yii\helpers\Url::to('/post/view/').$post->slug?>" class="frame">
                            <div class="img">
                                <?php $image = $post->allFiles('image'); ?>
                                <img src="<?=$image[0]->src('low')?>" alt="">
                            </div>
                            <div class="subtitle"><?=$post->title?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
