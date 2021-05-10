<div class="regional_courses_wrapper">
    <div class="bcontainer">
        <div class="tab_wrapper">
            <div class="info_tab">
                <div class="title"><?=__('Региональные курсы')?></div>
                <?php foreach ($courses as $cours) : ?>
                    <div id="tab-<?=$cours->slug?>" class="tab-content <?= $cours->slug == 1 ? 'current' : '';?>">
                        <div class="before"></div>
                        <div class="after"></div>
                        <div class="shadow"></div>
                        <div class="top">
                            <div class="left">
                                <?php if (!empty($cours->allFiles('image'))) : ?>
                                    <img src="<?= array_shift($cours->allFiles('image'))->src('low') ?>" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="right"><?=$cours->title?></div>
                        </div>
                        <div class="middle_text"><?=\yii\helpers\StringHelper::truncate($cours->description, '200', '...')?>
                        </div>
                        <a href="#"
                           class="bottom_link"><?=__('Подробнее')?></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="info_tab_region">
                <ul class="tabs">
                    <?php foreach ($courses as $cours) : ?>
                        <li class="tab current tooltip" title="<?=$cours->title?>" data-tab="tab-<?=$cours->slug?>"></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>