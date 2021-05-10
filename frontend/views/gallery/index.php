<?
$this->title  =__('Фотоальбомы');
?>
<div class="photo_gallery_page_wrapper">
    <div class="bcontainer">
        <div class="photo_gallery_page_title">
            <div class="title">Фотогалерея</div>
            <div class="line_solid"></div>
        </div>
            <?php
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'options' => [
                        'class' => 'photo_gallery_wrapper'
                ],
                'itemOptions' => [
                    'tag' => false,
                ],
                'summary' => false,
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
    <?=\frontend\widgets\News_footer::widget()?>
</div>