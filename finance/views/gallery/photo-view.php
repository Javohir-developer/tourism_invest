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
if (count($images) > 0) :
?>
<div class="photo_gallery_single_page_wrapper">
    <div class="bcontainer">
        <div class="content_sidebar_wrapper">
            <div class="content">
                <div class="photo_gallery_single_title">
                    <?=$this->title?>
                </div>
                <div class="photo_gallery_single_wrapper aniimated-thumbnials">
                    <?php foreach ($images as $image) : ?>
                        <a href="<?=$image->src('normal')?>" data-sub-html=".caption">
                            <img src="<?=$image->src('low')?>" />
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
        <?=\finance\widgets\Documents::widget()?>
    </div>
</div>
<?php endif; ?>