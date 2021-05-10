<?php
use yii\widgets\ListView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\grid\GridView;
\yii\web\JqueryAsset::register($this);
$title = $cat_title->name;
$this->title = $title;
?>


            <section class="layout2">
                <div class="Bcontainer">
                    <div class="main_container">
                        <div class="title_block new"><h1><?=$title?></h1></div>
                        <div class="items">

                            <?php
                            echo ListView::widget([
                                'dataProvider' => $dataProvider,
                                'itemOptions' => [
                                    'class' => 'itemA',
                                ],
                                'summary' => '',
                                'itemView' => '_category',
                                'pager' => [
                                    'class' => \kop\y2sp\ScrollPager::className(),
                                    'noneLeftText' => '',
                                    'item' =>'.itemA',
                                    'spinnerTemplate' =>'<div style="clear: both" class="preloader portfolio_download_again">
                <div class="spinner">
                    <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle class="length" fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                    </svg>
                    <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                    </svg>
                    <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                    </svg>
                    <svg viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="none" stroke-width="8" stroke-linecap="round" cx="33" cy="33" r="28"></circle>
                    </svg>
                </div>
            </div>',
                                    'triggerTemplate' => '<div class="clearfix"></div> <div class="portfolio_download_again ias-trigger"><a href="javascript:void(0)" class="x_box2" data-label="Подробнее"><div class="x_circle" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div><span class="x_mask2" style="-webkit-clip-path: circle(40px at 16px calc(50% + 0px));">Загрузить еще</span></a></div>',

                                ],
                            ]);
                            ?>

                        </div>
                    </div>
                    <?=\frontend\widgets\Leftbar::widget()?>
                </div>
            </section>

