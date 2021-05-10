<?php
use yii\widgets\ListView;
?>
<?php if (count($model) > 0) : ?>
    <div class="Government_procurement">
        <div class="left">
            <div class="title">
                <?=__('Госзакупки')?>
            </div>
            <div class="subtitle">
                <?=$model->title?>
            </div>
        </div>
        <div class="right">
            <a href="<?=\yii\helpers\Url::to('/post/view/').$model->slug?>" class="Government_link"><?=__('Подробнее')?></a>
        </div>
    </div>
<?php endif; ?>