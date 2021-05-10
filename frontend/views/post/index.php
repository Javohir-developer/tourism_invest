<section class="layout2">
    <div class="Bcontainer">
        <div class="main_container">
            <div class="title_block new"><span>Новости</span>  <a href="#">Фотоальбом</a>
            </div>
            <div class="items">
<?php
$portfolioSearch = new \common\models\DocumentsSearch();
$dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
$dataProvider->query->orderBy(['id' => SORT_DESC]);
$dataProvider->pagination->pageSize = 2;

echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_item',
    'summary' => '',
    'pager' => [
        'class' => \kop\y2sp\ScrollPager::className(),
        'noneLeftText' => '',
        'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
    ]
]);
?>
            </div>
        </div>
        <?=\frontend\widgets\Leftbar::widget()?>
    </div>
</section>

