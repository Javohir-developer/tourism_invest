<?php
$this->title  =__('VideoGallery');
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
                    'itemView' => '_item_video',
                    'itemOptions' => [
                        'class' => 'photo_gallery_wrapper',
                    ],
                    'summary' => '',

                    'pager' => [
                        'class' => \kop\y2sp\ScrollPager::className(),
                        'noneLeftText' => '',
                        'item' => '.item2',
                        'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
                    ]
                ]);
                ?>
            </div>
            <?=\finance\widgets\Post_sidebar::widget()?>
        </div>
    </div>
</div>