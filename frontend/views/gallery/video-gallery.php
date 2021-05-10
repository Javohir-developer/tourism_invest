<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 20.10.2018
 * Time: 16:40
 */
$this->title = __('Videogallery');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="video_gallery_wrapper">
    <div class="bcontainer">
        <div class="photo_gallery_page_title">
            <div class="title">Видеогалерея</div>
            <div class="line_solid"></div>
        </div>
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_video_item',
                'itemOptions' => [
                    'tag' => false,
                ],
                'options' => [
                    'class' => 'video_gallery_block video-gallery'
                ],
                'summary' => '',
                'pager' => [
                    'options' => [
                        'class' => 'minfin_pagination',
                    ],
                    'prevPageLabel' => '',
                    'nextPageLabel' => '',

                ]
            ]);
            ?>
    </div>
    <?=\frontend\widgets\UsefullLinks::widget()?>
</div>