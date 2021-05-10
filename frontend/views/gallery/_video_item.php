<?php
$image = $model->allFiles('image');
$videos = $model->allFiles('video');
?>


<?php if ($videos) : ?>
    <?php foreach ($videos as $video) : ?>
        <a href="" data-html="#video<?=$video->file_id?>" class="video_gallery video-open">
            <div class="video_block">
                <div style="display:none;" id="video<?=$video->file_id?>">
                    <video class="lg-video-object lg-html5" controls preload="none">
                        <source src="<?=$video->src()?>" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <img src="<?=$image[0]->src('low')?>" />
            </div>
            <span class="video_title">
                   <?=$video->title?>
                </span>
        </a>
    <?php endforeach; ?>
<?php endif; ?>
