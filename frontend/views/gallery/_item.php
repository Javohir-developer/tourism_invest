<?php
if($model->image){
    $images = $model->allFiles('image')[0]->src('low');
}else{
    $images = '';
}

?>
<a href="<?=\yii\helpers\Url::to('/gallery/photo-view/').$model->slug?>" class="photo_gallery">
    <div class="img_blok">
        <img src="<?=$images?>" alt="">
    </div>
    <div class="photo_gallery_text_block">
        <div class="title">
            <?=$model->name?>
        </div>
        <div class="info">
            <?=count($dataProvider);?>
        </div>
    </div>
</a>
