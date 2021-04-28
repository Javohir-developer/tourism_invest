<?php
use yii\helpers\Url;
use yii\helpers\StringHelper;
use justinvoelker\separatedpager\LinkPager;
$lang = Yii::$app->language;
$this->title = Yii::t('app','Tourism Yangiliklari');
$this->params['titlebreadcrumbs'] = Yii::t('app','YANGILIKLAR');
$this->params['breadcrumbs'][] = ' Yangliklar ';
?>



<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Posts
            ============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-40 clearfix" data-layout="fitRows">
                <?php foreach ($news as $new):?>
                    <div class="entry col-md-4 col-sm-6 col-12 ">
                    <div class="grid-inner card" style="padding: 10px">
                        <div class="entry-image">
                            <a href="<?= Url::to(["../uploads/images/$new->images"], true)?>" data-lightbox="image">
                                <img src="<?= Url::to(["../uploads/images/$new->images"], true)?>" alt="Standard Post with Image"></a>
                        </div>

                        <div style="height: 300px; overflow: hidden;">
                            <div class="entry-title">
                                <h2><a href="<?= Url::to(["/news/view?id=$new->id"], true)?>"><?=$new->{'name_' . $lang} ?></a></h2>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="icon-calendar3"></i>
                                        <?php
                                        echo Yii::$app->formatter->asDate( $new->date, 'Y') . ", ";
                                        echo Yii::$app->formatter->asDate( $new->date, 'd') . "-";
                                        echo $new->month;
                                        ?>
                                    </li>
                                    <li><a href="#"><i class="icon-eye"></i> <?=$new->views; ?></a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <div>
                                    <p><?=  $new->{'text_' . $lang}; ?></p>
                                </div>

                            </div>
                        </div>
                        <div style="margin-top: 25px">
                            <a href="<?= Url::to(["/news/view?id=$new->id"], true)?>" class="more-link"><?=Yii::t('app', 'Batafsil')?></a>
                        </div>

                    </div>
                </div>
                <?php endforeach;?>


            </div><!-- #posts end -->

            <div class="d-flex justify-content-between mt-5">
                <div class="entry col-12">
                    <div class="grid-inner row no-gutters">
                        <div class="site-pagination">
                            <?=  LinkPager::widget ( [
                                'id'=>'my-pager',
                                'pagination' => $pagination ,
                                'activePageCssClass' => 'active' ,
                                'maxButtonCount' => 6,
                                'options' => [
                                    'class' => 'pagination'
                                ]
                            ] ); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .pager end -->

        </div>
    </div>
</section><!-- #content end -->


<style>
    .entry-content {
         margin-top: 0;
    }
    .entry-image, .entry-image .slide a, .entry-image img, .entry-image > a {
        display: block;
        position: relative;
        width: 100%;
        height: 217px;
        object-fit: cover;
    }
</style>