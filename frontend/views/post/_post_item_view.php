<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 17.10.2018
 * Time: 0:17
 * @var $model common\models\Post
 */
$image = $model->allFiles('image');
?>
<a href="<?=\yii\helpers\Url::to('/post/view/'.$model->slug)?>" class="news_page_item">
    <div class="item_img_block">
        <img src="<?= !empty($image) ? $image[0]->src('low') : ''?>"" alt="">
    </div>
    <div class="item_text_block">
        <div class="date">
            <?=date('d M', $model->published_on)?>
        </div>
        <div class="title">
            <?=$model->title?>
        </div>
        <div class="subtitle">
            <?=$model->intro?>
        </div>
    </div>
</a>