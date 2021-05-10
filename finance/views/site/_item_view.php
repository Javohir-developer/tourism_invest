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
<a href="<?=\yii\helpers\Url::to('/post/view/').$model->slug?>" class="search_result">
    <div class="result">
        <img src="<?=$images?>" alt="">
        <div class="result_text">
            <div class="title">
                <?=$model->title?>
            </div>
            <div class="subtitle">
                <?=\yii\helpers\StringHelper::truncate($model->content, '200', '...')?>
            </div>
        </div>
    </div>
</a>