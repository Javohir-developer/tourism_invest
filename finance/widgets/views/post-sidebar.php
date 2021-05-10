<?php
use common\models\Slider;
use common\modules\settings\models\Settings;
use oks\categories\models\Categories;
/**
 * @var $weather \common\models\Weather
 */
$url = Yii::$app->request->resolve()[1]['slug'];
?>
<div class="sidebar">
    <div class="news_page_sidebar_title">
        <?=__('Категории')?>
    </div>
    <div class="news_page_sidebar_category">
        <ul>
            <?php
            $category = Categories::find()->where(['lang' => \oks\langs\components\Lang::getLangId()])->andWhere(['or', ['type' => 300], ['type' => 400]])->roots()->addOrderBy('root, lft')->all();
            foreach ($category as $item) : ?>
            <li><a href="<?php if ($item->type == 300) echo \yii\helpers\Url::to('/post/list/') . $item->slug;  elseif ($item->type == 400) echo \yii\helpers\Url::to('/pages/list/') . $item->slug?>" class="sidebar_category<?= $url == $item->slug ? '_active' : ''?>"><?= $item->name ?></a> </li>
                <?php $children = $item->children()->all(); ?>
                <?php if (!empty($children)) : ?>
                    <?php foreach ($children as $child) : ?>
                        <li><a style="padding-left: 35px" href="<? if ($item->type == 300) echo \yii\helpers\Url::to('/post/list/') . $child->slug; elseif ($item->type == 300) echo \yii\helpers\Url::to('/pages/list/') . $child->slug?>"><?= $child->name ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php foreach ($banners as $banner) : ?>
        <a href="<?= $banner->link ?>" class="advertising1">
            <?php if (!empty($banner->image)) :
                $image = $banner->allFiles('image') ?>
                <img src="<?= $image[0]->src('normal') ?>" alt="">
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
    <!--<a class="advertising2">
        <div class="advertising2_title">
            <?/*=__('Погода')*/?>
        </div>
        <div class="degree_block">
            <span class="degree"><?/*=$weather->weather*/?></span>
            <span class="degree_sim">c</span>
        </div>
        <div class="bottom_text">
            <?/*=__('Тошкент, Узбекистан')*/?>
        </div>
    </a>-->
</div>