<div class="state_links_wrapper">
    <div class="bcontainer">
        <div class="state_links_block">
            <div class="left">
                <div class="state_title_block">
                    <div class="title"><?= __('Наши партнеры') ?></div>
                    <div class="line_block"></div>
                </div>
                <div class="state_links_block">
                    <?php foreach ($partners as $link) : ?>
                        <?php $image = $link->allFiles('image') ?>
                        <a href="<?= $link->link ?>" class="state_link">
                            <img src="<?= !empty($image) ? $image[0]->src('low') : '' ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right">
                <img src="<?= $this->getImageUrl('/img/123.png'); ?>" alt="" class="img">
                <div class="mask_state_right_block"></div>
                <div class="state_link_title">
                    <div class="title"><?= __('Полезные ссылки') ?></div>
                    <div class="line_block"></div>
                </div>
                <div class="state_site_lonks_block">
                    <?php foreach ($usefuls as $link) : ?>
                        <?php $image = $link->allFiles('image') ?>
                        <a href="<?= $link->link ?>" class="state_link">
                            <img src="<?= !empty($image) ? $image[0]->src('low') : '' ?>" alt="">
                            <div class="state_link_text"><?= $link->title ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

