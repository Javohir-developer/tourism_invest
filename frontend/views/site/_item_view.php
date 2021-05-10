<?php
/**
 * @var $model \common\models\Post
 */

if($model->image){
    $image = $model->allFiles('image');
    $images = $image[0]->src('low');
}else{
    $images = '';
}

?>
<a href="<?=\yii\helpers\Url::to('/post/view/').$model->slug?>" class="result">
    <div class="img_block">
        <img src="<?=$images?>" alt="">
    </div>
    <div class="text_block">
        <div class="title">
            <?=$model->title?>
        </div>
        <div class="subtitle">
            <?=\yii\helpers\StringHelper::truncate($model->intro, '200', '...')?>
        </div>
    </div>
</a>