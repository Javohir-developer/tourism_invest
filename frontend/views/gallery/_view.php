<?php
if($model->image){
    $images = $model->allFiles('image')[0]->src('low');
}else{
    $images = '';
}

?>
<div class="item">
    <a href=""<?=\yii\helpers\Url::to('/gallery/photo-view/') . $model->slug?>" data-lightbox="gallery1" class="light_box">
        <img src="<?=$images?>" alt="">
    </a>
</div>