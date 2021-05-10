<?php
/**
 * @var $model \common\models\PhotoGallery
 */
if($model->image){
    $images = $model->allFiles('image');
}else{
    $images = '';
}

?>
<a href="<?=\yii\helpers\Url::to('/gallery/photo-view?slug='.$model->slug)?>" class="portal">
    <div class="img_block">
        <img src="<?= !empty($images) ? $images[0]->src('low') : ''?>" alt="">
    </div>
    <div class="info_img">
        <div class="icon">
            <div class="top"></div>
            <div class="bottom"><?=count($images)?></div>
        </div>
        <div class="text">
            <?=$model->name?>
        </div>
    </div>
</a>
