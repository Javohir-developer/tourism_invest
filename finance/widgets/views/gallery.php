<div class="index_gallery_block_wrapper">
    <div class="bcontainer">
        <div class="index_photo_block_wrapper">
            <div class="photo_title">
                <div class="title"><?=__('Фотогалерея')?></div><a href="<?=\yii\helpers\Url::to('/gallery/index')?>" class="photo_link"><?=__('Посмотреть все')?></a>
            </div>
            <div class="index_photo_block">
                <?php foreach ($photos as $photo) : ?>
                    <a href="<?=\yii\helpers\Url::to('/gallery/photo-view?slug=').$photo->slug?>" class="index_photo">
                        <?php if (!empty($photo)) $image = $photo->allFiles('image');
                        else $image = '';
                        ?>
                        <img src="<?=$image[0]->src('low')?>" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="index_video_block_wrapper">
            <?php foreach ($videos as $video) : ?>
                <div class="video_title">
                    <div class="title"><?=__('Видеогалерея')?></div><a href="<?=\yii\helpers\Url::to('/gallery/video')?>" class="video_link"><?=__('Посмотреть все видео')?></a>
                </div>
                <div class="index_video_block">
                    <a href="<?=\yii\helpers\Url::to('/gallery/video-gallery?slug='.$video->slug)?>" class="img_block">
                        <?php if (!empty($video)) $image = $video->allFiles('image');
                        else $image = '';
                        ?>
                        <img src="<?=$image[0]->src('low')?>" alt="">
                        <div class="text_block"><?=$video->name?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>