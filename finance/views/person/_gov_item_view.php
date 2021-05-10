<?php
/**
 * @var \common\models\Person $model
 */
$image = $model->allFiles('image');
?>
<div class="manual_tab_wrapper">
    <div class="tab_left">
        <img src="<?=!empty($image) ? $image[0]->src('low') : ''?>" alt="">
    </div>
    <div class="tab_right">
        <div class="right_top">
            <div class="top_left">
                <div class="title">
                    <?=$model->fullName?>
                </div>
                <div class="subtitle">
                    <?=$model->position?>
                </div>
            </div>
            <div class="top_right">
                <a href="<?=$model->link_blog?>"><?=__('Блог')?></a>
                <a href="<?=$model->link_forum?>"><?=__('Форум')?></a>
            </div>
        </div>
        <div class="right_center">
            <ul>
                <li><?=__('Телефон:')?></li>
                <li><?=$model->phone?></li>
            </ul>
            <ul>
                <li><?=__('Факс:')?></li>
                <li><?=$model->fax?></li>
            </ul>
            <ul>
                <li><?=__('E-mail:')?></li>
                <li><?=$model->email?></li>
            </ul>
        </div>
        <div class="right_bottom">
            <ul class="tabs">
                <li class="tab" data-tab="tab-<?=$model->id.'1'?>"><?=__('Биография')?></li>
                <li class="tab" data-tab="tab-<?=$model->id.'2'?>"><?=__('Обязанность')?></li>
                <li class="tab" data-tab="tab-<?=$model->id.'3'?>"><?=__('Приёмные дни')?></li>
            </ul>
        </div>
    </div>
</div>
<div class="manual_tab_content">
    <div id="tab-<?=$model->id.'1'?>" class="tab-content">
        <div class="text">
           <?=$model->bio?>
        </div>
    </div>

    <div id="tab-<?=$model->id.'2'?>" class="tab-content">
        <div class="text">
            <?=$model->duties?>
        </div>
    </div>

    <div id="tab-<?=$model->id.'3'?>" class="tab-content">
        <ul class="week">
            <li><?=__('Понедельник')?></li>
            <li><?=__('Вторник')?></li>
            <li><?=__('Среда')?></li>
            <li><?=__('Четверг')?></li>
            <li><?=__('Пятница')?></li>
            <li><?=__('Суббота')?></li>
            <li><?=__('Воскресенье')?></li>
        </ul>
    </div>
</div>


