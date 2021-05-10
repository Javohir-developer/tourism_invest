<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 20.10.2018
 * Time: 16:40
 * @var $video \oks\filemanager\models\Files
 */
$this->title = __('Videogallery');
$this->params['breadcrumbs'][] = $this->title;
$image = $videos->allFiles('image');
$videos = $videos->allFiles('video');
?>
<div class="video_gallery_page_wrapper">
    <div class="bcontainer">
        <div class="content_sidebar_wrapper">
            <div class="content">
                <div class="video_gallery_title"><?=$this->title?></div>
                <div class="video_block_frame video-gallery">
                    <?php foreach ($videos as $video) : ?>
                        <a href="" data-html="#video<?=$video->file_id?>" class="item video-open">
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
                </div>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
        <?=\finance\widgets\Documents::widget()?>
    </div>
</div>