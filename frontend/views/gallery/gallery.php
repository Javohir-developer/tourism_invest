<?php
$this->title  =__('Фотоальбомы');
?>
<style>
    .list-view{
        width: 100%;
        display: flex;
        flex-wrap: wrap;
    }

    .layout2 .Bcontainer .main_container .items .itemA{

        width: 100%;
        margin-bottom: 30px;
        padding: 0 15px;


    }
    .layout2 .Bcontainer .main_container  .items .itemA a .img img {
        width: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }
</style>
</style>

<section class="photo_album_page layout2">
<div class="Bcontainer">
<div class="main_container">
<div class="title_block"><span>Фотоальбомы</span>
                                            </div>
                                              <div class="items">

<?php
   echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_item',
    'itemOptions' => [
        'class' => 'item2',
    ],
    'summary' => '',

    'pager' => [
        'class' => \kop\y2sp\ScrollPager::className(),
        'noneLeftText' => '',
        'item' =>'.item2',
        'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
    ]
]);
?>
</div>

  </div>


    <?=\frontend\widgets\Leftbar::widget()?>
    </div>
      </section>