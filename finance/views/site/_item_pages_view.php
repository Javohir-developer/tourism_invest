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
<a href="<?=\yii\helpers\Url::to('/pages/view/').$model->slug?>" class="search_result">
    <div class="result">
        <img src="<?=$images?>" alt="">
        <div class="result_text">
            <div class="title">
                <?=$model->title?>
            </div>
            <div class="subtitle">
                <?=\yii\helpers\StringHelper::truncate($model->body, '200', '...')?>
            </div>
        </div>
    </div>
</a>