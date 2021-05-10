<?php
use yii\widgets\ListView;
?>
<div class="documents">
    <div class="title_block"><span><?=__('Документы')?></span>  <a href="/documents"><?=__('Открыть все')?></a>
    </div>
    <div class="items">

        <?php
        $portfolioSearch = new \common\models\DocumentsSearch();
        $dataProvider = $portfolioSearch->search(\Yii::$app->request->queryParams);
        $dataProvider->query->orderBy(['id' => SORT_DESC]);
        $dataProvider->pagination->pageSize = 6;

        echo \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_documents',
            'summary' => '',
            'pager' => [
                'class' => \kop\y2sp\ScrollPager::className(),
                'noneLeftText' => '',
                'spinnerTemplate'=>'<div class="ias-spinner" style="text-align: center;"><img src="{src}"/></div>',
                'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
            ]
        ]);
        ?>
    </div>

</div>