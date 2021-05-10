<div class="index_useful_links_wrapper" style="margin-top: 50px">
    <div class="bcontainer">
        <div class="title"><?= __('Полезные ссылки') ?></div>
        <div class="index_useful_links_block owl-carousel">
            <?php foreach ($links as $link) : ?>
            <?php $image = $link->allFiles('image')?>
                <a href="<?= $link->link?>" class="index_useful_links">
                    <img src="<?= !empty($image) ? $image[0]->src('low') : ''?>" alt=""> <span class="text"><?=$link->title?></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>