<?php
$image = $model->allFiles('image');
$videos = $model->allFiles('video');
?>
<?php if ($videos) : ?>
    <?php foreach ($videos as $video) : ?>
        <div class="col-lg-4 col-md-4 col-sm-12" style="float:left;">
            <div class="item">
                <a href="" data-html="#video<?=$video->file_id?>" class="item video-open" data-poster="<?=$this->getImageUrl('img/@2xx1.png')?>">
                    <div class="video_block">
                        <div style="display:none;" id="video<?=$video->file_id?>">
                            <video class="lg-video-object lg-html5" controls preload="none">
                                <source src="<?=$video->src()?>" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <img src="<?=$image[0]->src('low')?>" />
                    </div>
                    <div class="text">
                        <div class="title">
                            <?=$video->title?>
                        </div>
                        <div class="date">
                            <?=Yii::$app->formatter->asDate($video->date_create, 'Y-m-d')?>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
