<div class="index_top_slider_wrapper">
    <div class="index_top_slider owl-carousel">
        <?php foreach ($sliders as $slider) : ?>
        <?php !empty($slider->image) ? $image = $slider->allFiles('image') : '' ?>
            <div class="item_slider">
                <img src="<?= !empty($image) ? $image[0]->src('') : ''?>" alt="">
                <div class="bcontainer">
                    <div class="info_slider">
                        <div class="title"><?= $slider->title?></div>
                        <div class="subtitle"><?=$slider->description?></div><a href="<?=$slider->link?>"><?=__('Подробнее')?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>