<?php
/**
 * @var \common\models\Person $model
 */
$image = $model->allFiles('image');
?>
<div class="rector_wrapper">
    <div class="rector_items">
        <img src="<?=$image[0]->src('low')?>" alt="">
        <div class="item_title">
            <?= $model->position ?>
        </div>
        <div class="item_name">
            <?= $model->fullName ?>
        </div>
        <div class="item_info">
            <div class="reception">
                <span><?= __('Qabul kunlari:')?></span>
                <span>Chor-Jum 16.00-18.00</span>
            </div>
            <div class="phone">
                <span><?= __('Telefon:')?></span>
                <span><?= $model->phone ?></span>
            </div>
            <div class="email">
                <span><?= __('E-mail:')?></span>
                <span><?= $model->email ?></span>
            </div>
        </div>
        <div class="frame_link">
            <a href="<?=\yii\helpers\Url::to('/person/view/').$model->id?>" class="link"><span><?=__('Батафсил')?> </span></a>
        </div>
    </div>
</div>


