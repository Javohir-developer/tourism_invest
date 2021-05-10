<?php
/**
 * @var $quote \common\models\Slider
 * Created by PhpStorm.
 * User: OKS
 * Date: 12.10.2018
 * Time: 22:55
 */

$route = Yii::$app->controller->route;
?>
<div class="sidebar">
    <?php if (!empty($quotes)) : ?>
        <h2 class="sideba_title_block">
            <?=__('Цитаты')?>
        </h2>
        <div class="sidebar_slider owl-carousel">
            <?php foreach ($quotes as $quote) : ?>
                <div class="sidebar_item_block">
                    <div class="item_text">
                        <p><?=$quote->title?></p>
                        <p style="text-align: right"><?=$quote->link?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <h2 class="sideba_title_block"><?=__('Интерактив хизматлар')?></h2>
    <a style="padding: 0;min-height: 90px;" href="https://www.scopus.com/" class="sidebar_item_block">
        <img style="width:100%;height: auto;margin-bottom: 0;" src="<?=$this->getImageUrl('scobus2.png')?>" class="item_class1" alt="">
        <div class="item_text"></div>
    </a>
    <a style="padding: 0;min-height: 90px;" href="https://www.sciencedirect.com/" class="sidebar_item_block">
        <img style="width:100%;height: auto;margin-bottom: 0;" src="<?=$this->getImageUrl('scobus1.png')?>" class="item_class1" alt="">
        <div class="item_text"></div>
    </a>
    <?php
    $menu_frontend_sidebar = new \common\modules\menu\components\SidebarMenu(['alias' => 'sidebar', 'without_cache' => true]);
    ?>
</div>

