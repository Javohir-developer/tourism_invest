<?php
/**
 * Created by PhpStorm.
 * User: OKS
 * Date: 20.10.2018
 * Time: 16:40
 */
$this->title = $photo->name;

$this->params['breadcrumbs'][] = ['label' => __('Gallery'), 'url' => ['gallery']];
$this->params['breadcrumbs'][] = $this->title;


?>
<section class="news_single_page layout2">
    <div class="Bcontainer">
        <div class="main_container">
            <div class="title_block new"><span><?=$model->name?></span>
            </div>
            <div class="richtextbox">
                <div class="date"><?=Yii::$app->formatter->asDate($model->created_at);?></div>
                <?php
                foreach ($model->allFiles('image') as $image):

                endforeach;
                ?>

                <?=$model->description?>
            </div>
        </div>
    </div>
</section>


<section class="photo_gallery_page layout2">
    <div class="Bcontainer">
        <div class="main_container">
            <div class="title_block new"><span>Фотогалерея</span>  <a href="#">Фотоальбом</a>
            </div>
            <div class="title"><?=$model->name?></div>
            <div class="items">
                <?php
                $dataProvider = new \yii\data\ArrayDataProvider([
                    'allModels' => $model,
                ]);
                $dataProvider->pagination->pageSize = 2;
               echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_photo-view',
                    'itemOptions' => [
                        'class' => 'itemA',
                    ],
                    'summary' => '',

                    'pager' => [
                        'class' => \kop\y2sp\ScrollPager::className(),
                        'noneLeftText' => '',
                        'item' =>'.itemA',
                        'triggerTemplate' => '<div style="clear: both"></div> </div><a style="margin: 0 auto;width: 205px" href="javascript:void(0)" class="load_more">Загрузить еще</a>'
                    ]
                ]);
                ?>
            </div>

            </div>
        </div>
        <?=\frontend\widgets\Leftbar::widget()?>
    </div>
</section>


