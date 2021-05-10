<div class="index_top_block_wrapper">
    <div class="bcontainer">
        <div class="index_top_block">
            <div class="left">
                <div class="index_top_slider owl-carousel owl-theme">
                    <?php foreach ($sliders as $slider) : ?>
                        <div class="item">
                            <?php !empty($slider->image) ? $image = $slider->allFiles('image') : '' ?>
                            <img src="<?= !empty($image) ? $image[0]->src('high') : ''?>" alt="">
                            <div class="block_text">
                                <div class="text">
                                    <div class="title"><?= $slider->title?></div>
                                </div>
                                <a href="<?=$slider->link?>" class="btn_link">
                                    <div class="btn_link_hover"><?=__('Подробно')?></div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right">
                <div class="index_top_form_block">
                    <div class="form_title"><?=__('Вход в Портал')?></div>
                    <div class="form_text"><?=__('Авторизация в учебном центре Министерства Финансов Республики Узбекистан, происходит по внешней ссылке на сам портал. Регистрация осуществляется строго со стороны Министерства')?></div>
                    <a href="#" class="form_link"><?=__('Войти')?></a>
                </div>
            </div>
        </div>
    </div>
</div>