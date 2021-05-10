<?php
use common\models\Slider;
use common\modules\settings\models\Settings;
use oks\categories\models\Categories;

?>
<div class="sidebar_block">
    <div class="sidebar_link">
        <ul>
            <?php
            $category = Categories::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->roots()->addOrderBy('root, lft')->all();
            foreach ($category as $item) : ?>
                <li><a href="<?= $item->type == 100 ? \yii\helpers\Url::to('/post/list/') . $item->slug  : \yii\helpers\Url::to('/pages/list/') . $item->slug?>"><?= $item->name ?></a></li>
                <?php  $children = $item->children()->all(); ?>
                <?php if (!empty($children)) : ?>
                    <?php foreach ($children as $child) : ?>
                        <li><a style="padding-left: 35px" href="<?= $item->type == 100 ? \yii\helpers\Url::to('/post/list/') . $child->slug  : \yii\helpers\Url::to('/pages/list/') . $child->slug?>"><?= $child->name ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php foreach ($banners as $banner) : ?>
        <a href="<?= $banner->link ?>" class="advertisements">
            <?php if (!empty($banner->image)) :
                $image = $banner->allFiles('image') ?>
                <img src="<?= $image[0]->src('normal') ?>" alt="">
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>
