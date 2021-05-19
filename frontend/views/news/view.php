<?php

use yii\helpers\StringHelper;
use yii\helpers\Url;
$lang = Yii::$app->language;
$news = \frontend\controllers\NewsController::getCount();
$this->title = Yii::t('app','Tourism Yangiliklari');
$this->params['titlebreadcrumbs'] = Yii::t('app','YANGILIKLAR');
$this->params['breadcrumbs'][] = ' Yangliklar ';
?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-9">

                    <div class="single-post mb-0">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <h2><?=$model->{'name_' . $lang} ?>  </h2>
                            </div><!-- .entry-title end -->

                            <!-- Entry Meta
                            ============================================= -->
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i>
                                        <?php
                                        echo Yii::$app->formatter->asDate( $model->date, 'Y') . ", ";
                                        echo Yii::$app->formatter->asDate( $model->date, 'd') . "-";
                                        echo $model->month;
                                        ?>
                                    </li>
                                    <li><a href="#"><span class=" icon-eye"></span> <?=$model->views; ?></a></li>
                                </ul>
                            </div><!-- .entry-meta end -->

                            <!-- Entry Image
                            ============================================= -->
                            <div class="entry-image">
                                <a href="#"><img src="<?= Url::to(["../uploads/images/$model->images"], true)?>" alt="Blog Single"></a>
                            </div><!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content mt-0">

                                <?=$model->{'text_' . $lang}?>
                            </div>
                        </div><!-- .entry end -->


                    </div>

                </div><!-- .postcontent end -->


                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">
                        <div class="widget clearfix">

                            <div class="tabs mb-0 clearfix" id="sidebar-tabs">

                                <h4><?= Yii::t('app', "KO'P O'QILGAN YANGILIKLAR")?></h4>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">

                                            <?php foreach ($news as $new): ?>
                                                <div class="entry col-12">
                                                    <div class="grid-inner row no-gutters">
                                                        <div class="col-auto">
                                                            <div class="entry-image">
                                                                <a href="<?= Url::to(["/news/view?id=$new->id"], true)?>"><img class="" src="<?= Url::to(["../uploads/images/$new->images"], true)?>" alt="Image"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col pl-3">
                                                            <div class="entry-title">
                                                                <h4><a href="<?= Url::to(["/news/view?id=$new->id"], true)?>"><?= StringHelper::truncate($new->{'name_' . $lang}, 40,' ...' ); ?></a></h4>
                                                            </div>
                                                            <div class="entry-meta">
                                                                <ul>
                                                                    <li><i class=" icon-eye"></i> <?= $new->views; ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget clearfix">
                            <h4><?= Yii::t('app', 'Tourism Mediya')?></h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="<?= Url::to(['../canvas/images/portfolio/4/1.jpg'])?>" alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <!--                            <h3><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single-video.html">Mac Sunglasses</a></h3>-->
                                            <!--                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="http://themes.semicolonweb.com/html/canvas/portfolio-single.html">
                                                <img src="<?= Url::to(['../canvas/images/portfolio/4/1.jpg'])?>" alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="http://themes.semicolonweb.com/html/canvas/images/blog/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <!--                            <h3><a href="http://themes.semicolonweb.com/html/canvas/portfolio-single.html">Open Imagination</a></h3>-->
                                            <!--                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>-->
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>