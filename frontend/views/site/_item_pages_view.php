<?php
/**
 * @var $model \common\models\Pages
 */

if($model->files){
    $image = $model->allFiles('files');
    $images = $image[0]->src('low');
}else{
    $images = '';
}

?>
<a href="<?=\yii\helpers\Url::to('/pages/view/').$model->slug?>" class="result">
    <div class="img_block">
        <img src="<?=$images?>" alt="">
    </div>
    <div class="text_block">
        <div class="title">
            <?=$model->title?>
        </div>
        <div class="subtitle">
            <?=\yii\helpers\StringHelper::truncate($model->body, '200', '...')?>
        </div>
    </div>
</a>