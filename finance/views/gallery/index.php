<?php
$this->title  =__('Фотоальбомы');
?>
<div class="photo_gallery_page_wrapper">
    <div class="bcontainer">
        <div class="content_sidebar_wrapper">
            <div class="content">
                <div class="photo_gallery_title">
                    <?=$this->title?>
                </div>
                <?php
                echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_item',
                    'options' => [
                        'class' => 'photo_gallery_wrapper',
                    ],
                    'itemOptions' => [
                        'tag' => false,
                    ],
                    'summary' => '',
                ]);
                ?>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
        <div class="Government_procurement">
            <div class="left">
                <div class="title">
                <?=__('Госзакупки')?>
                </div>
                <div class="subtitle">
                    Узбекистан Республикаси товар хом ашё биржасининг махсус ахборот портали оркали электрон савдо йули билан тадбиркорлик субъектларидан енг зарур товарлар (ишлар, хизматлар) нинг давлат харидини ташкил этиш тартиби тугрисида Низом
                </div>
            </div>
            <div class="right">
                <a href="#" class="Government_link"><?=__('Подробнее')?></a>
            </div>
        </div>
    </div>
</div>