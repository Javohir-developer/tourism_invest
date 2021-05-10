<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 20.10.2018
 * Time: 16:40
 */
$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => __('Gallery'), 'url' => ['gallery']];
$this->params['breadcrumbs'][] = $this->title;
$images = $model->allFiles('image');

?>
<div class="photo_gallery_page_wrapper">
    <div class="bcontainer">
        <div class="photo_gallery_page_title">
            <div class="title"><?=$model->name?></div>
            <div class="line_solid"></div>
        </div>
        <?php if (count($images) > 0) : ?>
            <div class="photo_gallery_wrapper" id="aniimated-thumbnials">
                <?php foreach ($images as $image) : ?>
                    <a href="<?=$image->src('normal')?>" class="photo_gallery">
                        <img src="<?=$image->src('low')?>" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <?=\frontend\widgets\UsefullLinks::widget()?>
</div>