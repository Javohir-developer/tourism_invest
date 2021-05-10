<div class="index_gallery_wrapper">
    <div class="bcontainer">
        <div class="index_photo_and_video_block">
            <div class="photo_gallery">
                <div class="photo_video_title">
                    <div class="title"><?=__('Фотогалерея')?></div>
                    <div class="line_block"></div>
                </div>
                <a href="<?=\yii\helpers\Url::to('/gallery/index')?>" class="index_gallery_link"><?=__('Перейти к фотогалерее')?></a>
                <div class="img_block">
                    <?php $i=0; foreach ($photos as $photo) : ?>
                        <?php if (!empty($photo)) :
                            $image = $photo->allFiles('image');
                            ?>
                            <a href="<?= \yii\helpers\Url::to('gallery/photo-view/') . $photo->slug ?>"
                               class="img <?=$i == 0 || $i == 3 ? 'big_img' : '';$i++?>">
                                <img src="<?= $image[0]->src('normal') ?>" alt="">
                                <div class="mask_index_gallery"></div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="video_gallery">
                <div class="photo_video_title">
                    <div class="title"><?=__('Видеогалерея')?></div>
                    <div class="line_block"></div>
                </div>
                <a href="<?=\yii\helpers\Url::to('/gallery/video-gallery')?>" class="index_gallery_link"><?=__('Перейти к фотогалерее')?></a>
                <div class="img_block">
                    <?php $i=0; foreach ($videos as $video) : ?>
                        <?php if (!empty($video)) :
                            $image = $video->allFiles('image')
                            ?>
                            <a href="<?=\yii\helpers\Url::to('/gallery/video-gallery')?>" class="img <?=$i == 1 || $i == 2 ? 'big_img' : '';$i++?>">
                                <img src="<?= $image[0]->src('low') ?>" alt="">
                                <div class="mask_index_gallery"></div>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
