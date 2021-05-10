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
<a href="<?=\yii\helpers\Url::to('/post/view/'.$model->slug)?>" class="news_content">
    <img src="<?= !empty($image) ? $image[0]->src('low') : ''?>" alt="">
    <div class="text_block">
        <div class="text">
            <?=$model->title?>
        </div>
        <div class="datte">
            <div class="data">
                <?=date('d.m.Y', $model->published_on)?>
            </div>
            <div class="view">
                <?=$model->view?>
            </div>
        </div>
    </div>
</a>